<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class PackageFiles
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"content_type":{"type":"string"},"created_at":{"type":"string"},"download_url":{"type":"string"},"id":{"type":"integer"},"md5":{"type":["string","null"]},"name":{"type":"string"},"sha1":{"type":["string","null"]},"sha256":{"type":"string"},"size":{"type":"integer"},"state":{"type":"string"},"updated_at":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"content_type":"generated_content_type_null","created_at":"generated_created_at_null","download_url":"generated_download_url_null","id":13,"md5":"generated_md5_null","name":"generated_name_null","sha1":"generated_sha1_null","sha256":"generated_sha256_null","size":13,"state":"generated_state_null","updated_at":"generated_updated_at_null"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('content_type')] public ?string $contentType, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('download_url')] public ?string $downloadUrl, public ?int $id, public ?string $md5, public ?string $name, public ?string $sha1, public ?string $sha256, public ?int $size, public ?string $state, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public ?string $updatedAt)
    {
    }
}
