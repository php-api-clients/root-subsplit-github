<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Teams\UpdateLegacy\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the team."},"description":{"type":"string","description":"The description of the team."},"privacy":{"enum":["secret","closed"],"type":"string","description":"The level of privacy this team should have. Editing teams without specifying this parameter leaves `privacy` intact. The options are:  \\n**For a non-nested team:**  \\n\\\\* `secret` - only visible to organization owners and members of this team.  \\n\\\\* `closed` - visible to all members of this organization.  \\n**For a parent or child team:**  \\n\\\\* `closed` - visible to all members of this organization."},"permission":{"enum":["pull","push","admin"],"type":"string","description":"**Deprecated**. The permission that new repositories will be added to the team with when none is specified. Can be one of:  \\n\\\\* `pull` - team members can pull, but not push to or administer newly-added repositories.  \\n\\\\* `push` - team members can pull and push, but not administer newly-added repositories.  \\n\\\\* `admin` - team members can pull, push and administer newly-added repositories.","default":"pull"},"parent_team_id":{"type":["integer","null"],"description":"The ID of a team to set as the parent team."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","description":"generated_description_null","privacy":"secret","permission":"pull","parent_team_id":13}';
    /**
    * name: The name of the team.
    * description: The description of the team.
    * privacy: The level of privacy this team should have. Editing teams without specifying this parameter leaves `privacy` intact. The options are:  
    **For a non-nested team:**  
    \* `secret` - only visible to organization owners and members of this team.  
    \* `closed` - visible to all members of this organization.  
    **For a parent or child team:**  
    \* `closed` - visible to all members of this organization.
    * permission: **Deprecated**. The permission that new repositories will be added to the team with when none is specified. Can be one of:  
    \* `pull` - team members can pull, but not push to or administer newly-added repositories.  
    \* `push` - team members can pull and push, but not administer newly-added repositories.  
    \* `admin` - team members can pull, push and administer newly-added repositories.
    * parentTeamId: The ID of a team to set as the parent team.
    */
    public function __construct(public string $name, public ?string $description, public ?string $privacy, public ?string $permission, #[\EventSauce\ObjectHydrator\MapFrom('parent_team_id')] public ?int $parentTeamId)
    {
    }
}
