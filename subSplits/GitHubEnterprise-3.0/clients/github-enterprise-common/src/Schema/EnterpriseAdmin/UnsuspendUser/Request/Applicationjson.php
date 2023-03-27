<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\UnsuspendUser\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"reason":{"type":"string","description":"The reason the user is being unsuspended. This message will be logged in the [audit log](https:\\/\\/docs.github.com\\/enterprise\\/admin\\/articles\\/audit-logging\\/). If you don\'t provide a `reason`, it will default to \\"Unsuspended via API by _SITE\\\\_ADMINISTRATOR_\\", where _SITE\\\\_ADMINISTRATOR_ is the person who performed the action."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"reason":"generated_reason_null"}';
    /**
     * reason: The reason the user is being unsuspended. This message will be logged in the [audit log](https://docs.github.com/enterprise/admin/articles/audit-logging/). If you don't provide a `reason`, it will default to "Unsuspended via API by _SITE\_ADMINISTRATOR_", where _SITE\_ADMINISTRATOR_ is the person who performed the action.
     */
    public function __construct(public ?string $reason)
    {
    }
}
