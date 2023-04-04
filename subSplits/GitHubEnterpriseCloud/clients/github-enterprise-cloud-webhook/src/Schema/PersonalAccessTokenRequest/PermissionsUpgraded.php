<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\PersonalAccessTokenRequest;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class PermissionsUpgraded
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"organization":{"type":"object","additionalProperties":{"type":"string"}},"repository":{"type":"object","additionalProperties":{"type":"string"}},"other":{"type":"object","additionalProperties":{"type":"string"}}},"description":"Requested permissions that elevate access for a previously approved request for access, categorized by type of permission."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Requested permissions that elevate access for a previously approved request for access, categorized by type of permission.';
    public const SCHEMA_EXAMPLE_DATA = '{"organization":null,"repository":null,"other":null}';
    public function __construct(public mixed $organization, public mixed $repository, public mixed $other)
    {
    }
}
