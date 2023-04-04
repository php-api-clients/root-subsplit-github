<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Apps;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class GetInstallation
{
    public const OPERATION_ID = 'apps/get-installation';
    public const OPERATION_MATCH = 'GET /app/installations/{installation_id}';
    private const METHOD = 'GET';
    private const PATH = '/app/installations/{installation_id}';
    /**installation_id parameter**/
    private int $installationId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\App\Installations\CbInstallationIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\App\Installations\CbInstallationIdRcb $hydrator, int $installationId)
    {
        $this->installationId = $installationId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{installation_id}'), array($this->installationId), self::PATH));
    }
    /**
     * @return Schema\Installation
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Installation
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Installation::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Installation::class, $body);
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }
                break;
            /**Preview header missing**/
            case 415:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Apps\GetInstallation\Response\Applicationjson\H415::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\Operation\Apps\GetInstallation\Response\Applicationjson\H415(415, $this->hydrator->hydrateObject(Schema\Operation\Apps\GetInstallation\Response\Applicationjson\H415::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
