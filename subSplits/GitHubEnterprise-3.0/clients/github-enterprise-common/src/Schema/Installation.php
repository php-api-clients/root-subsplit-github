<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Installation
{
    public const SCHEMA_JSON = '{"title":"Installation","required":["id","app_id","app_slug","target_id","target_type","single_file_name","repository_selection","access_tokens_url","html_url","repositories_url","events","account","permissions","created_at","updated_at","suspended_by","suspended_at"],"type":"object","properties":{"id":{"type":"integer","description":"The ID of the installation.","examples":[1]},"account":{"type":["null","object"],"anyOf":[{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"Simple User"},{"title":"Enterprise","required":["id","node_id","name","slug","html_url","created_at","updated_at","avatar_url"],"type":"object","properties":{"description":{"type":["string","null"],"description":"A short description of the enterprise."},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/enterprises\\/octo-business"]},"website_url":{"type":["string","null"],"description":"The enterprise\'s website URL.","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the enterprise","examples":[42]},"node_id":{"type":"string","examples":["MDEwOlJlcG9zaXRvcnkxMjk2MjY5"]},"name":{"type":"string","description":"The name of the enterprise.","examples":["Octo Business"]},"slug":{"type":"string","description":"The slug url identifier for the enterprise.","examples":["octo-business"]},"created_at":{"type":["string","null"],"format":"date-time","examples":["2019-01-26T19:01:12Z"]},"updated_at":{"type":["string","null"],"format":"date-time","examples":["2019-01-26T19:14:43Z"]},"avatar_url":{"type":"string","format":"uri"}},"description":"An enterprise account"}]},"repository_selection":{"enum":["all","selected"],"type":"string","description":"Describe whether all repositories have been selected or there\'s a selection involved"},"access_tokens_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/installations\\/1\\/access_tokens"]},"repositories_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/installation\\/repositories"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/organizations\\/github\\/settings\\/installations\\/1"]},"app_id":{"type":"integer","examples":[1]},"target_id":{"type":"integer","description":"The ID of the user or organization this token is being scoped to."},"target_type":{"type":"string","examples":["Organization"]},"permissions":{"title":"App Permissions","type":"object","properties":{"actions":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts. Can be one of: `read` or `write`."},"administration":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation. Can be one of: `read` or `write`."},"checks":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for checks on code. Can be one of: `read` or `write`."},"contents":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges. Can be one of: `read` or `write`."},"deployments":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for deployments and deployment statuses. Can be one of: `read` or `write`."},"environments":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for managing repository environments. Can be one of: `read` or `write`."},"issues":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones. Can be one of: `read` or `write`."},"metadata":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata. Can be one of: `read` or `write`."},"packages":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for packages published to GitHub Packages. Can be one of: `read` or `write`."},"pages":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds. Can be one of: `read` or `write`."},"pull_requests":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges. Can be one of: `read` or `write`."},"repository_hooks":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage the post-receive hooks for a repository. Can be one of: `read` or `write`."},"repository_projects":{"enum":["read","write","admin"],"type":"string","description":"The level of permission to grant the access token to manage repository projects, columns, and cards. Can be one of: `read`, `write`, or `admin`."},"secret_scanning_alerts":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage secret scanning alerts. Can be one of: `read` or `write`."},"secrets":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage repository secrets. Can be one of: `read` or `write`."},"security_events":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage security events like code scanning alerts. Can be one of: `read` or `write`."},"single_file":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage just a single file. Can be one of: `read` or `write`."},"statuses":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for commit statuses. Can be one of: `read` or `write`."},"vulnerability_alerts":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage Dependabot alerts. Can be one of: `read` or `write`."},"workflows":{"enum":["write"],"type":"string","description":"The level of permission to grant the access token to update GitHub Actions workflow files. Can be one of: `write`."},"members":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for organization teams and members. Can be one of: `read` or `write`."},"organization_administration":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage access to an organization. Can be one of: `read` or `write`."},"organization_hooks":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage the post-receive hooks for an organization. Can be one of: `read` or `write`."},"organization_plan":{"enum":["read"],"type":"string","description":"The level of permission to grant the access token for viewing an organization\'s plan. Can be one of: `read`."},"organization_projects":{"enum":["read","write","admin"],"type":"string","description":"The level of permission to grant the access token to manage organization projects and projects beta (where available). Can be one of: `read`, `write`, or `admin`."},"organization_packages":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for organization packages published to GitHub Packages. Can be one of: `read` or `write`."},"organization_secrets":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage organization secrets. Can be one of: `read` or `write`."},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization. Can be one of: `read` or `write`."},"organization_user_blocking":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage users blocked by the organization. Can be one of: `read` or `write`."},"team_discussions":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage team discussions and related comments. Can be one of: `read` or `write`."},"content_references":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for notification of content references and creation content attachments. Can be one of: `read` or `write`."}},"description":"The permissions granted to the user-to-server access token.","example":{"contents":"read","issues":"read","deployments":"write","single_file":"read"}},"events":{"type":"array","items":{"type":"string"}},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"single_file_name":{"type":["string","null"],"examples":["config.yaml"]},"has_multiple_single_files":{"type":"boolean","examples":[true]},"single_file_paths":{"type":"array","items":{"type":"string"},"examples":["config.yml",".github\\/issue_TEMPLATE.md"]},"app_slug":{"type":"string","examples":["github-actions"]},"suspended_by":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"Simple User"}]},"suspended_at":{"type":["string","null"],"format":"date-time"},"contact_email":{"type":["string","null"],"examples":["\\"test_13f1e99741e3e004@d7e1eb0bc0a1ba12.com\\""]}},"description":"Installation"}';
    public const SCHEMA_TITLE = 'Installation';
    public const SCHEMA_DESCRIPTION = 'Installation';
    public const SCHEMA_EXAMPLE_DATA = '{"id":1,"account":{"name":"generated_name_null","email":"generated_email_null","login":"octocat","id":1,"node_id":"MDQ6VXNlcjE=","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","gravatar_id":"41d064eb2195891e12d0413f63227ea7","url":"https:\\/\\/api.github.com\\/users\\/octocat","html_url":"https:\\/\\/github.com\\/octocat","followers_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/followers","following_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}","gists_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}","starred_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}","subscriptions_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions","organizations_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/orgs","repos_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/repos","events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}","received_events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/received_events","type":"User","site_admin":false,"starred_at":"\\"2020-07-09T00:17:55Z\\""},"repository_selection":"all","access_tokens_url":"https:\\/\\/api.github.com\\/installations\\/1\\/access_tokens","repositories_url":"https:\\/\\/api.github.com\\/installation\\/repositories","html_url":"https:\\/\\/github.com\\/organizations\\/github\\/settings\\/installations\\/1","app_id":1,"target_id":13,"target_type":"Organization","permissions":{"contents":"read","issues":"read","deployments":"write","single_file":"read","actions":"read","administration":"read","checks":"read","environments":"read","metadata":"read","packages":"read","pages":"read","pull_requests":"read","repository_hooks":"read","repository_projects":"read","secret_scanning_alerts":"read","secrets":"read","security_events":"read","statuses":"read","vulnerability_alerts":"read","workflows":"write","members":"read","organization_administration":"read","organization_hooks":"read","organization_plan":"read","organization_projects":"read","organization_packages":"read","organization_secrets":"read","organization_self_hosted_runners":"read","organization_user_blocking":"read","team_discussions":"read","content_references":"read"},"events":["generated_events_null"],"created_at":"1970-01-01T00:00:00+00:00","updated_at":"1970-01-01T00:00:00+00:00","single_file_name":"config.yaml","has_multiple_single_files":true,"single_file_paths":["config.yml"],"app_slug":"github-actions","suspended_by":null,"suspended_at":"1970-01-01T00:00:00+00:00","contact_email":"\\"test_13f1e99741e3e004@d7e1eb0bc0a1ba12.com\\""}';
    /**
     * id: The ID of the installation.
     * repositorySelection: Describe whether all repositories have been selected or there's a selection involved
     * targetId: The ID of the user or organization this token is being scoped to.
     * permissions: The permissions granted to the user-to-server access token.
     * @param array<string> $events
     * @param ?array<string> $singleFilePaths
     */
    public function __construct(public int $id, public Schema\SimpleUser $account, #[\EventSauce\ObjectHydrator\MapFrom('repository_selection')] public string $repositorySelection, #[\EventSauce\ObjectHydrator\MapFrom('access_tokens_url')] public string $accessTokensUrl, #[\EventSauce\ObjectHydrator\MapFrom('repositories_url')] public string $repositoriesUrl, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('app_id')] public int $appId, #[\EventSauce\ObjectHydrator\MapFrom('target_id')] public int $targetId, #[\EventSauce\ObjectHydrator\MapFrom('target_type')] public string $targetType, public Schema\AppPermissions $permissions, public array $events, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, #[\EventSauce\ObjectHydrator\MapFrom('single_file_name')] public ?string $singleFileName, #[\EventSauce\ObjectHydrator\MapFrom('has_multiple_single_files')] public ?bool $hasMultipleSingleFiles, #[\EventSauce\ObjectHydrator\MapFrom('single_file_paths')] public ?array $singleFilePaths, #[\EventSauce\ObjectHydrator\MapFrom('app_slug')] public string $appSlug, #[\EventSauce\ObjectHydrator\MapFrom('suspended_by')] public mixed $suspendedBy, #[\EventSauce\ObjectHydrator\MapFrom('suspended_at')] public ?string $suspendedAt, #[\EventSauce\ObjectHydrator\MapFrom('contact_email')] public ?string $contactEmail)
    {
    }
}
