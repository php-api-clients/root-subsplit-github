<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\Teams;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class UnlinkExternalIdpGroupFromTeamForOrg
{
    public const OPERATION_ID = 'teams/unlink-external-idp-group-from-team-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/teams/{team_slug}/external-groups';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/teams/{team_slug}/external-groups';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The slug of the team name.**/
    private string $teamSlug;
    public function __construct(string $org, string $teamSlug)
    {
        $this->org = $org;
        $this->teamSlug = $teamSlug;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{team_slug}'), array($this->org, $this->teamSlug), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
