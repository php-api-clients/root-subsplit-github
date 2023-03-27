<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Migrations\UpdateImport\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"vcs_username":{"type":"string","description":"The username to provide to the originating repository."},"vcs_password":{"type":"string","description":"The password to provide to the originating repository."},"vcs":{"enum":["subversion","tfvc","git","mercurial"],"type":"string","description":"The type of version control system you are migrating from.","examples":["\\"git\\""]},"tfvc_project":{"type":"string","description":"For a tfvc import, the name of the project that is being imported.","examples":["\\"project1\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"vcs_username":"generated_vcs_username_null","vcs_password":"generated_vcs_password_null","vcs":"\\"git\\"","tfvc_project":"\\"project1\\""}';
    /**
     * vcsUsername: The username to provide to the originating repository.
     * vcsPassword: The password to provide to the originating repository.
     * vcs: The type of version control system you are migrating from.
     * tfvcProject: For a tfvc import, the name of the project that is being imported.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('vcs_username')] public ?string $vcsUsername, #[\EventSauce\ObjectHydrator\MapFrom('vcs_password')] public ?string $vcsPassword, public ?string $vcs, #[\EventSauce\ObjectHydrator\MapFrom('tfvc_project')] public ?string $tfvcProject)
    {
    }
}
