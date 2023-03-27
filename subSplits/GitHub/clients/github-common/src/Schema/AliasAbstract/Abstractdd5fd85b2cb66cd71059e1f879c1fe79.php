<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
abstract readonly class Abstractdd5fd85b2cb66cd71059e1f879c1fe79
{
    public const SCHEMA_JSON = '{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ecosystem":"generated_ecosystem_null","name":"generated_name_null"}';
    public function __construct(public string $ecosystem, public string $name)
    {
    }
}
