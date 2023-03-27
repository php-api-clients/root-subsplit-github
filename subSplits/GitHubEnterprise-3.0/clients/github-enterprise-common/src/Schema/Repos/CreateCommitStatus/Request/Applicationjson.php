<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\CreateCommitStatus\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["error","failure","pending","success"],"type":"string","description":"The state of the status. Can be one of `error`, `failure`, `pending`, or `success`."},"target_url":{"type":"string","description":"The target URL to associate with this status. This URL will be linked from the GitHub UI to allow users to easily see the source of the status.  \\nFor example, if your continuous integration system is posting build status, you would want to provide the deep link for the build output for this specific SHA:  \\n`http:\\/\\/ci.example.com\\/user\\/repo\\/build\\/sha`"},"description":{"type":"string","description":"A short description of the status."},"context":{"type":"string","description":"A string label to differentiate this status from the status of other systems. This field is case-insensitive.","default":"default"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"error","target_url":"generated_target_url_null","description":"generated_description_null","context":"generated_context_null"}';
    /**
    * state: The state of the status. Can be one of `error`, `failure`, `pending`, or `success`.
    * targetUrl: The target URL to associate with this status. This URL will be linked from the GitHub UI to allow users to easily see the source of the status.  
    For example, if your continuous integration system is posting build status, you would want to provide the deep link for the build output for this specific SHA:  
    `http://ci.example.com/user/repo/build/sha`
    * description: A short description of the status.
    * context: A string label to differentiate this status from the status of other systems. This field is case-insensitive.
    */
    public function __construct(public string $state, #[\EventSauce\ObjectHydrator\MapFrom('target_url')] public ?string $targetUrl, public ?string $description, public ?string $context)
    {
    }
}
