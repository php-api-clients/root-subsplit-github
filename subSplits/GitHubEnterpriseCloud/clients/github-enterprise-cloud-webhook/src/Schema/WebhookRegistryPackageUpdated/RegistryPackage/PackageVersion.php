<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookRegistryPackageUpdated\RegistryPackage;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class PackageVersion
{
    public const SCHEMA_JSON = '{"required":["id","version","name","description","summary","body","body_html","html_url","target_commitish","target_oid","created_at","updated_at","metadata","package_files","author","installation_command","package_url"],"type":"object","properties":{"author":{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"body":{"type":"string"},"body_html":{"type":"string"},"created_at":{"type":"string"},"description":{"type":"string"},"docker_metadata":{"type":"array","items":{"type":["null"]}},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"installation_command":{"type":"string"},"manifest":{"type":"string"},"metadata":{"type":"array","items":{}},"name":{"type":"string"},"package_files":{"type":"array","items":{"type":"object","properties":{"content_type":{"type":"string"},"created_at":{"type":"string"},"download_url":{"type":"string"},"id":{"type":"integer"},"md5":{"type":["string","null"]},"name":{"type":"string"},"sha1":{"type":["string","null"]},"sha256":{"type":"string"},"size":{"type":"integer"},"state":{"type":"string"},"updated_at":{"type":"string"}}}},"package_url":{"type":"string"},"prerelease":{"type":"boolean"},"release":{"required":["url","html_url","id","tag_name","target_commitish","name","draft","author","prerelease","created_at","published_at"],"type":"object","properties":{"author":{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"name":{"type":"string"},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string"}}},"rubygems_metadata":{"type":"array","items":{}},"summary":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"target_oid":{"type":"string"},"updated_at":{"type":"string"},"version":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"author":{"avatar_url":"generated_avatar_url_null","events_url":"generated_events_url_null","followers_url":"generated_followers_url_null","following_url":"generated_following_url_null","gists_url":"generated_gists_url_null","gravatar_id":"generated_gravatar_id_null","html_url":"generated_html_url_null","id":13,"login":"generated_login_null","node_id":"generated_node_id_null","organizations_url":"generated_organizations_url_null","received_events_url":"generated_received_events_url_null","repos_url":"generated_repos_url_null","site_admin":false,"starred_url":"generated_starred_url_null","subscriptions_url":"generated_subscriptions_url_null","type":"generated_type_null","url":"generated_url_null"},"body":"generated_body_null","body_html":"generated_body_html_null","created_at":"generated_created_at_null","description":"generated_description_null","docker_metadata":[null],"draft":false,"html_url":"generated_html_url_null","id":13,"installation_command":"generated_installation_command_null","manifest":"generated_manifest_null","metadata":[null],"name":"generated_name_null","package_files":[{"content_type":"generated_content_type_null","created_at":"generated_created_at_null","download_url":"generated_download_url_null","id":13,"md5":"generated_md5_null","name":"generated_name_null","sha1":"generated_sha1_null","sha256":"generated_sha256_null","size":13,"state":"generated_state_null","updated_at":"generated_updated_at_null"}],"package_url":"generated_package_url_null","prerelease":false,"release":{"author":{"avatar_url":"generated_avatar_url_null","events_url":"generated_events_url_null","followers_url":"generated_followers_url_null","following_url":"generated_following_url_null","gists_url":"generated_gists_url_null","gravatar_id":"generated_gravatar_id_null","html_url":"generated_html_url_null","id":13,"login":"generated_login_null","node_id":"generated_node_id_null","organizations_url":"generated_organizations_url_null","received_events_url":"generated_received_events_url_null","repos_url":"generated_repos_url_null","site_admin":false,"starred_url":"generated_starred_url_null","subscriptions_url":"generated_subscriptions_url_null","type":"generated_type_null","url":"generated_url_null"},"created_at":"generated_created_at_null","draft":false,"html_url":"generated_html_url_null","id":13,"name":"generated_name_null","prerelease":false,"published_at":"generated_published_at_null","tag_name":"generated_tag_name_null","target_commitish":"generated_target_commitish_null","url":"generated_url_null"},"rubygems_metadata":[null],"summary":"generated_summary_null","tag_name":"generated_tag_name_null","target_commitish":"generated_target_commitish_null","target_oid":"generated_target_oid_null","updated_at":"generated_updated_at_null","version":"generated_version_null"}';
    /**
     * @param ?array<mixed> $dockerMetadata
     * @param array<mixed> $metadata
     * @param array<\ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion\PackageFiles> $packageFiles
     * @param ?array<mixed> $rubygemsMetadata
     */
    public function __construct(public Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion\Author $author, public string $body, #[\EventSauce\ObjectHydrator\MapFrom('body_html')] public string $bodyHtml, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, public string $description, #[\EventSauce\ObjectHydrator\MapFrom('docker_metadata')] public ?array $dockerMetadata, public ?bool $draft, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('installation_command')] public string $installationCommand, public ?string $manifest, public array $metadata, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('package_files')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion\PackageFiles::class)] public array $packageFiles, #[\EventSauce\ObjectHydrator\MapFrom('package_url')] public string $packageUrl, public ?bool $prerelease, public ?Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion\Release $release, #[\EventSauce\ObjectHydrator\MapFrom('rubygems_metadata')] public ?array $rubygemsMetadata, public string $summary, #[\EventSauce\ObjectHydrator\MapFrom('tag_name')] public ?string $tagName, #[\EventSauce\ObjectHydrator\MapFrom('target_commitish')] public string $targetCommitish, #[\EventSauce\ObjectHydrator\MapFrom('target_oid')] public string $targetOid, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, public string $version)
    {
    }
}
