<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\AliasAbstract;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
abstract readonly class Abstract26ce37ac45c329cf34aca72bd6cfcae8
{
    public const SCHEMA_JSON = '{"required":["labels"],"type":"object","properties":{"labels":{"maxItems":100,"minItems":0,"type":"array","items":{"type":"string"},"description":"The names of the custom labels to set for the runner. You can pass an empty array to remove all custom labels."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"labels":["generated_labels_null"]}';
    /**
     * labels: The names of the custom labels to set for the runner. You can pass an empty array to remove all custom labels.
     * @param array<string> $labels
     */
    public function __construct(public array $labels)
    {
    }
}
