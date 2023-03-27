<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class NugetMetadata
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":["null","string","object","integer"],"oneOf":[{"type":"string"},{"type":"object"},{"type":"integer"}]},"name":{"type":"string"},"value":{"oneOf":[{"type":"boolean"},{"type":"string"},{"type":"integer"},{"type":"object","properties":{"url":{"type":"string"},"branch":{"type":"string"},"commit":{"type":"string"},"type":{"type":"string"}}}]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":"generated_id_null","name":"generated_name_null","value":false}';
    public function __construct(public ?string $id, public ?string $name, public ?bool $value)
    {
    }
}
