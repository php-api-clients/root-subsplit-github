<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Issues;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class DeleteComment
{
    public const OPERATION_ID = 'issues/delete-comment';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/repos/{owner}/{repo}/issues/comments/{comment_id}';
    private string $owner;
    private string $repo;
    /**comment_id parameter**/
    private int $commentId;
    public function __construct(string $owner, string $repo, int $commentId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->commentId = $commentId;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{comment_id}'), array($this->owner, $this->repo, $this->commentId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
