<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Orgs\Update\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"billing_email":{"type":"string","description":"Billing email address. This address is not publicized."},"company":{"type":"string","description":"The company name."},"email":{"type":"string","description":"The publicly visible email address."},"twitter_username":{"type":"string","description":"The Twitter username of the company."},"location":{"type":"string","description":"The location."},"name":{"type":"string","description":"The shorthand name of the company."},"description":{"type":"string","description":"The description of the company."},"has_organization_projects":{"type":"boolean","description":"Whether an organization can use organization projects."},"has_repository_projects":{"type":"boolean","description":"Whether repositories that belong to the organization can use repository projects."},"default_repository_permission":{"enum":["read","write","admin","none"],"type":"string","description":"Default permission level members have for organization repositories.","default":"read"},"members_can_create_repositories":{"type":"boolean","description":"Whether of non-admin organization members can create repositories. **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details.","default":true},"members_can_create_internal_repositories":{"type":"boolean","description":"Whether organization members can create internal repositories, which are visible to all enterprise members. You can only allow members to create internal repositories if your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+. For more information, see \\"[Restricting repository creation in your organization](https:\\/\\/docs.github.com\\/enterprise-server@3.7\\/github\\/setting-up-and-managing-organizations-and-teams\\/restricting-repository-creation-in-your-organization)\\" in the GitHub Help documentation."},"members_can_create_private_repositories":{"type":"boolean","description":"Whether organization members can create private repositories, which are visible to organization members with permission. For more information, see \\"[Restricting repository creation in your organization](https:\\/\\/docs.github.com\\/enterprise-server@3.7\\/github\\/setting-up-and-managing-organizations-and-teams\\/restricting-repository-creation-in-your-organization)\\" in the GitHub Help documentation."},"members_can_create_public_repositories":{"type":"boolean","description":"Whether organization members can create public repositories, which are visible to anyone. For more information, see \\"[Restricting repository creation in your organization](https:\\/\\/docs.github.com\\/enterprise-server@3.7\\/github\\/setting-up-and-managing-organizations-and-teams\\/restricting-repository-creation-in-your-organization)\\" in the GitHub Help documentation."},"members_allowed_repository_creation_type":{"enum":["all","private","none"],"type":"string","description":"Specifies which types of repositories non-admin organization members can create. \\n**Note:** This parameter is deprecated and will be removed in the future. Its return value ignores internal repositories. Using this parameter overrides values set in `members_can_create_repositories`. See the parameter deprecation notice in the operation description for details."},"members_can_create_pages":{"type":"boolean","description":"Whether organization members can create GitHub Pages sites. Existing published sites will not be impacted.","default":true},"members_can_fork_private_repositories":{"type":"boolean","description":"Whether organization members can fork private organization repositories.","default":false},"web_commit_signoff_required":{"type":"boolean","description":"Whether contributors to organization repositories are required to sign off on commits they make through GitHub\'s web interface.","default":false},"blog":{"type":"string","examples":["\\"http:\\/\\/github.blog\\""]},"advanced_security_enabled_for_new_repositories":{"type":"boolean","description":"Whether GitHub Advanced Security is automatically enabled for new repositories.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/enterprise-server@3.7\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/orgs\\/{org}` request."},"dependabot_alerts_enabled_for_new_repositories":{"type":"boolean","description":"Whether Dependabot alerts is automatically enabled for new repositories.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/enterprise-server@3.7\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/orgs\\/{org}` request."},"dependabot_security_updates_enabled_for_new_repositories":{"type":"boolean","description":"Whether Dependabot security updates is automatically enabled for new repositories.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/enterprise-server@3.7\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/orgs\\/{org}` request."},"dependency_graph_enabled_for_new_repositories":{"type":"boolean","description":"Whether dependency graph is automatically enabled for new repositories.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/enterprise-server@3.7\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/orgs\\/{org}` request."},"secret_scanning_enabled_for_new_repositories":{"type":"boolean","description":"Whether secret scanning is automatically enabled for new repositories.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/enterprise-server@3.7\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/orgs\\/{org}` request."},"secret_scanning_push_protection_enabled_for_new_repositories":{"type":"boolean","description":"Whether secret scanning push protection is automatically enabled for new repositories.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/enterprise-server@3.7\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/orgs\\/{org}` request."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"billing_email":"generated_billing_email_null","company":"generated_company_null","email":"generated_email_null","twitter_username":"generated_twitter_username_null","location":"generated_location_null","name":"generated_name_null","description":"generated_description_null","has_organization_projects":false,"has_repository_projects":false,"default_repository_permission":"read","members_can_create_repositories":false,"members_can_create_internal_repositories":false,"members_can_create_private_repositories":false,"members_can_create_public_repositories":false,"members_allowed_repository_creation_type":"all","members_can_create_pages":false,"members_can_fork_private_repositories":false,"web_commit_signoff_required":false,"blog":"\\"http:\\/\\/github.blog\\"","advanced_security_enabled_for_new_repositories":false,"dependabot_alerts_enabled_for_new_repositories":false,"dependabot_security_updates_enabled_for_new_repositories":false,"dependency_graph_enabled_for_new_repositories":false,"secret_scanning_enabled_for_new_repositories":false,"secret_scanning_push_protection_enabled_for_new_repositories":false}';
    /**
    * billingEmail: Billing email address. This address is not publicized.
    * company: The company name.
    * email: The publicly visible email address.
    * twitterUsername: The Twitter username of the company.
    * location: The location.
    * name: The shorthand name of the company.
    * description: The description of the company.
    * hasOrganizationProjects: Whether an organization can use organization projects.
    * hasRepositoryProjects: Whether repositories that belong to the organization can use repository projects.
    * defaultRepositoryPermission: Default permission level members have for organization repositories.
    * membersCanCreateRepositories: Whether of non-admin organization members can create repositories. **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details.
    * membersCanCreateInternalRepositories: Whether organization members can create internal repositories, which are visible to all enterprise members. You can only allow members to create internal repositories if your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/enterprise-server@3.7/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
    * membersCanCreatePrivateRepositories: Whether organization members can create private repositories, which are visible to organization members with permission. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/enterprise-server@3.7/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
    * membersCanCreatePublicRepositories: Whether organization members can create public repositories, which are visible to anyone. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/enterprise-server@3.7/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
    * membersAllowedRepositoryCreationType: Specifies which types of repositories non-admin organization members can create. 
    **Note:** This parameter is deprecated and will be removed in the future. Its return value ignores internal repositories. Using this parameter overrides values set in `members_can_create_repositories`. See the parameter deprecation notice in the operation description for details.
    * membersCanCreatePages: Whether organization members can create GitHub Pages sites. Existing published sites will not be impacted.
    * membersCanForkPrivateRepositories: Whether organization members can fork private organization repositories.
    * webCommitSignoffRequired: Whether contributors to organization repositories are required to sign off on commits they make through GitHub's web interface.
    * advancedSecurityEnabledForNewRepositories: Whether GitHub Advanced Security is automatically enabled for new repositories.
    
    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/enterprise-server@3.7/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."
    
    You can check which security and analysis features are currently enabled by using a `GET /orgs/{org}` request.
    * dependabotAlertsEnabledForNewRepositories: Whether Dependabot alerts is automatically enabled for new repositories.
    
    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/enterprise-server@3.7/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."
    
    You can check which security and analysis features are currently enabled by using a `GET /orgs/{org}` request.
    * dependabotSecurityUpdatesEnabledForNewRepositories: Whether Dependabot security updates is automatically enabled for new repositories.
    
    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/enterprise-server@3.7/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."
    
    You can check which security and analysis features are currently enabled by using a `GET /orgs/{org}` request.
    * dependencyGraphEnabledForNewRepositories: Whether dependency graph is automatically enabled for new repositories.
    
    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/enterprise-server@3.7/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."
    
    You can check which security and analysis features are currently enabled by using a `GET /orgs/{org}` request.
    * secretScanningEnabledForNewRepositories: Whether secret scanning is automatically enabled for new repositories.
    
    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/enterprise-server@3.7/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."
    
    You can check which security and analysis features are currently enabled by using a `GET /orgs/{org}` request.
    * secretScanningPushProtectionEnabledForNewRepositories: Whether secret scanning push protection is automatically enabled for new repositories.
    
    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/enterprise-server@3.7/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."
    
    You can check which security and analysis features are currently enabled by using a `GET /orgs/{org}` request.
    */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('billing_email')] public ?string $billingEmail, public ?string $company, public ?string $email, #[\EventSauce\ObjectHydrator\MapFrom('twitter_username')] public ?string $twitterUsername, public ?string $location, public ?string $name, public ?string $description, #[\EventSauce\ObjectHydrator\MapFrom('has_organization_projects')] public ?bool $hasOrganizationProjects, #[\EventSauce\ObjectHydrator\MapFrom('has_repository_projects')] public ?bool $hasRepositoryProjects, #[\EventSauce\ObjectHydrator\MapFrom('default_repository_permission')] public ?string $defaultRepositoryPermission, #[\EventSauce\ObjectHydrator\MapFrom('members_can_create_repositories')] public ?bool $membersCanCreateRepositories, #[\EventSauce\ObjectHydrator\MapFrom('members_can_create_internal_repositories')] public ?bool $membersCanCreateInternalRepositories, #[\EventSauce\ObjectHydrator\MapFrom('members_can_create_private_repositories')] public ?bool $membersCanCreatePrivateRepositories, #[\EventSauce\ObjectHydrator\MapFrom('members_can_create_public_repositories')] public ?bool $membersCanCreatePublicRepositories, #[\EventSauce\ObjectHydrator\MapFrom('members_allowed_repository_creation_type')] public ?string $membersAllowedRepositoryCreationType, #[\EventSauce\ObjectHydrator\MapFrom('members_can_create_pages')] public ?bool $membersCanCreatePages, #[\EventSauce\ObjectHydrator\MapFrom('members_can_fork_private_repositories')] public ?bool $membersCanForkPrivateRepositories, #[\EventSauce\ObjectHydrator\MapFrom('web_commit_signoff_required')] public ?bool $webCommitSignoffRequired, public ?string $blog, #[\EventSauce\ObjectHydrator\MapFrom('advanced_security_enabled_for_new_repositories')] public ?bool $advancedSecurityEnabledForNewRepositories, #[\EventSauce\ObjectHydrator\MapFrom('dependabot_alerts_enabled_for_new_repositories')] public ?bool $dependabotAlertsEnabledForNewRepositories, #[\EventSauce\ObjectHydrator\MapFrom('dependabot_security_updates_enabled_for_new_repositories')] public ?bool $dependabotSecurityUpdatesEnabledForNewRepositories, #[\EventSauce\ObjectHydrator\MapFrom('dependency_graph_enabled_for_new_repositories')] public ?bool $dependencyGraphEnabledForNewRepositories, #[\EventSauce\ObjectHydrator\MapFrom('secret_scanning_enabled_for_new_repositories')] public ?bool $secretScanningEnabledForNewRepositories, #[\EventSauce\ObjectHydrator\MapFrom('secret_scanning_push_protection_enabled_for_new_repositories')] public ?bool $secretScanningPushProtectionEnabledForNewRepositories)
    {
    }
}
