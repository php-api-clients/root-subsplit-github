<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class GetActionsCacheUsageForOrg
{
    public const OPERATION_ID = 'actions/get-actions-cache-usage-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/cache/usage';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/actions/cache/usage';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\Usage $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\Usage $hydrator, string $org)
    {
        $this->org = $org;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}'), array($this->org), self::PATH));
    }
    /**
     * @return Schema\ActionsCacheUsageOrgEnterprise
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\ActionsCacheUsageOrgEnterprise
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ActionsCacheUsageOrgEnterprise::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\ActionsCacheUsageOrgEnterprise::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
