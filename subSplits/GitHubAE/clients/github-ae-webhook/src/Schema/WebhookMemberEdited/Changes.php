<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookMemberEdited;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"old_permission":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous permissions of the collaborator if the action was edited."}}},"permission":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}},"description":"The changes to the collaborator permissions"}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the collaborator permissions';
    public const SCHEMA_EXAMPLE_DATA = '{"old_permission":{"from":"generated_from_null"},"permission":{"from":"generated_from_null","to":"generated_to_null"}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('old_permission')] public ?Schema\WebhookMemberEdited\Changes\OldPermission $oldPermission, public ?Schema\WebhookMemberEdited\Changes\Permission $permission)
    {
    }
}
