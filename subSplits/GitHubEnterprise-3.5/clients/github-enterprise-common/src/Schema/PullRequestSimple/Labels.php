<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\PullRequestSimple;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Labels
{
    public const SCHEMA_JSON = '{"required":["id","node_id","url","name","description","color","default"],"type":"object","properties":{"id":{"type":"integer","format":"int64"},"node_id":{"type":"string"},"url":{"type":"string"},"name":{"type":"string"},"description":{"type":"string"},"color":{"type":"string"},"default":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"node_id":"generated_node_id_null","url":"generated_url_null","name":"generated_name_null","description":"generated_description_null","color":"generated_color_null","default":false}';
    public function __construct(public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $url, public string $name, public string $description, public string $color, public bool $default)
    {
    }
}
