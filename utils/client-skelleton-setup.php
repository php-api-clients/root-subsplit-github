<?php

use ApiClients\Client\GitHub\Client;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use React\Http\Browser;
use WyriHaximus\SubSplitTools\Files;
use WyriHaximus\SubSplitTools\Repos;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

const SUB_SPLITS_PATH =  'subSplits/';
const SUB_SPLITS_DEFAULT_BRANCH_PATH =  'subSplits_defaultBranch/';
const SUB_SPLITS_ROOT =  __DIR__ . '/../' . SUB_SPLITS_PATH;
const SUB_SPLITS_DEFAULT_BRANCH_ROOT =  __DIR__ . '/../' . SUB_SPLITS_DEFAULT_BRANCH_PATH;
const SKELLETON_ROOT = __DIR__ . '/../skelleton/';
const SKELLETON_DEFAULT_BRANCH_ROOT = __DIR__ . '/../skelleton-default-branch/';
const SUBSPLIT_CONFIG_PATH = __DIR__ . '/../etc/config.subsplit-publish.json';
const GHES_PREFIX = 'descriptions-next/ghes-';

if (strlen(getenv('SUBSPLIT_GITHUB_TOKEN')) > 0) {
    $repos = new Repos(
        new Client(
            new class() implements AuthenticationInterface {

                public function authHeader() : string {
                    return 'Bearer ' . getenv('SUBSPLIT_GITHUB_TOKEN');
                }
            },
            new Browser(),
        )
    );
}

/** @var array<array{specUrl: string, fullName: string, namespace: string, packageName: string}> $clients */
$clients = [];
$subSplitConfig = [];
$clients[] = [
    'specUrl' => 'https://raw.githubusercontent.com/github/rest-api-description/main/descriptions-next/api.github.com/api.github.com.yaml',
    'fullName' => 'GitHub',
    'namespace' => 'GitHub',
    'path' => 'GitHub',
    'packageName' => 'github',
    'branch' => 'v0.3.x',
];
$clients[] = [
    'specUrl' => 'https://raw.githubusercontent.com/github/rest-api-description/main/descriptions-next/ghec/ghec.yaml',
    'fullName' => 'GitHub Enterprise Cloud',
    'namespace' => 'GitHubEnterpriseCloud',
    'path' => 'GitHubEnterpriseCloud',
    'packageName' => 'github-enterprise-cloud',
    'branch' => 'v0.2.x',
];
$clients[] = [
    'specUrl' => 'https://raw.githubusercontent.com/github/rest-api-description/main/descriptions-next/github.ae/github.ae.yaml',
    'fullName' => 'GitHub AE',
    'namespace' => 'GitHubAE',
    'path' => 'GitHubAE',
    'packageName' => 'github-ae',
    'branch' => 'v0.2.x',
];

foreach (json_decode(
    file_get_contents(
        'https://api.github.com/repos/github/rest-api-description/git/trees/main?recursive=1',
        false,
        stream_context_create([
            'http' => [
                'method' => 'GET',
                'header' => implode(
                    PHP_EOL,
                    [
                        'User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad'
                    ],
                ),
            ],
        ])
    ),
    true,
)['tree'] as $node) {
    $file = $node['path'];
    if (substr($file, 0, strlen(GHES_PREFIX)) !== GHES_PREFIX) {
        continue;
    }

    if (substr($file, -5) !== '.yaml') {
        continue;
    }

    $version = substr($file, strlen(GHES_PREFIX), strpos($file, '/', strlen(GHES_PREFIX)) - strlen(GHES_PREFIX));

    if ($file !== GHES_PREFIX . $version . '/ghes-' . $version . '.yaml') {
        continue;
    }

    $clients[] = [
        'specUrl' => 'https://raw.githubusercontent.com/github/rest-api-description/main/descriptions-next/ghes-' . $version . '/ghes-' . $version . '.yaml',
        'fullName' => 'GitHub Enterprise (v' . $version . ')',
        'namespace' => 'GitHubEnterprise',
        'path' => 'GitHubEnterprise-' . $version,
        'packageName' => 'github-enterprise',
        'branch' => 'v0.2.' . $version . '.x',
    ];
}

foreach ($clients as $client) {
    $subSplitConfig[$client['fullName']] = [
        'name' => $client['packageName'],
        'directory' => SUB_SPLITS_PATH . $client['path'],
        'target' => 'git@github.com:php-api-clients/subsplit-' . $client['packageName'] . '.git',
        'target-branch' => $client['branch'],
    ];
    $subSplitConfig[$client['fullName'] . '-default-branch'] = [
        'name' => $client['packageName'] . '-default-branch',
        'directory' => SUB_SPLITS_DEFAULT_BRANCH_PATH . $client['path'],
        'target' => 'git@github.com:php-api-clients/subsplit-' . $client['packageName'] . '.git',
        'target-branch' => 'main',
    ];

    if (strlen(getenv('SUBSPLIT_GITHUB_TOKEN')) > 0 && isset($repos)) {
        $repos->upsert('php-api-clients', 'subsplit-' . $client['packageName']);
    }

    Files::setUp(
        SKELLETON_DEFAULT_BRANCH_ROOT,
        SUB_SPLITS_DEFAULT_BRANCH_ROOT . $client['path'],
        $client,
    );

    if (file_exists(SUB_SPLITS_ROOT . $client['path'])) {
        continue;
    }

    Files::setUp(
        SKELLETON_ROOT,
        SUB_SPLITS_ROOT . $client['path'],
        $client,
    );
}

file_put_contents(
    SUBSPLIT_CONFIG_PATH,
    json_encode(
        [
            'sub-splits' => array_values($subSplitConfig),
        ],
        JSON_PRETTY_PRINT,
    ) . PHP_EOL,
);
