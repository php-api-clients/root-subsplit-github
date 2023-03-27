<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class RemovePreReceiveHookEnforcementForOrg
{
    public const OPERATION_ID = 'enterprise-admin/remove-pre-receive-hook-enforcement-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}';
    private string $org;
    /**pre_receive_hook_id parameter**/
    private int $preReceiveHookId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb $hydrator, string $org, int $preReceiveHookId)
    {
        $this->org = $org;
        $this->preReceiveHookId = $preReceiveHookId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{pre_receive_hook_id}'), array($this->org, $this->preReceiveHookId), self::PATH));
    }
    /**
     * @return Schema\OrgPreReceiveHook
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\OrgPreReceiveHook
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\OrgPreReceiveHook::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\OrgPreReceiveHook::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
