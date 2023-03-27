<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
abstract readonly class Abstractbcf0aa249ce55b8f7911df479f4cd41a
{
    public const SCHEMA_JSON = '{"required":["value","type"],"type":"object","properties":{"type":{"type":"string"},"value":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"generated_type_null","value":"generated_value_null"}';
    public function __construct(public string $type, public string $value)
    {
    }
}
