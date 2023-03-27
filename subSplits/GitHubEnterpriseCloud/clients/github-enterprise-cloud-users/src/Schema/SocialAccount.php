<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class SocialAccount
{
    public const SCHEMA_JSON = '{"title":"Social account","required":["provider","url"],"type":"object","properties":{"provider":{"type":"string","examples":["linkedin"]},"url":{"type":"string","examples":["https:\\/\\/www.linkedin.com\\/company\\/github\\/"]}},"description":"Social media account"}';
    public const SCHEMA_TITLE = 'Social account';
    public const SCHEMA_DESCRIPTION = 'Social media account';
    public const SCHEMA_EXAMPLE_DATA = '{"provider":"linkedin","url":"https:\\/\\/www.linkedin.com\\/company\\/github\\/"}';
    public function __construct(public string $provider, public string $url)
    {
    }
}
