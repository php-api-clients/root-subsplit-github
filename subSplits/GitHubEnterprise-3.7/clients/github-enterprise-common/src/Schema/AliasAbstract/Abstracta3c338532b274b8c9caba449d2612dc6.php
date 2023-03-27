<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
abstract readonly class Abstracta3c338532b274b8c9caba449d2612dc6
{
    public const SCHEMA_JSON = '{"title":"Repository Lite","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","node_id","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url"],"type":"object","properties":{"archive_url":{"type":"string","format":"uri-template"},"assignees_url":{"type":"string","format":"uri-template"},"blobs_url":{"type":"string","format":"uri-template"},"branches_url":{"type":"string","format":"uri-template"},"collaborators_url":{"type":"string","format":"uri-template"},"comments_url":{"type":"string","format":"uri-template"},"commits_url":{"type":"string","format":"uri-template"},"compare_url":{"type":"string","format":"uri-template"},"contents_url":{"type":"string","format":"uri-template"},"contributors_url":{"type":"string","format":"uri"},"deployments_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"downloads_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri"},"fork":{"type":"boolean"},"forks_url":{"type":"string","format":"uri"},"full_name":{"type":"string"},"git_commits_url":{"type":"string","format":"uri-template"},"git_refs_url":{"type":"string","format":"uri-template"},"git_tags_url":{"type":"string","format":"uri-template"},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the repository"},"issue_comment_url":{"type":"string","format":"uri-template"},"issue_events_url":{"type":"string","format":"uri-template"},"issues_url":{"type":"string","format":"uri-template"},"keys_url":{"type":"string","format":"uri-template"},"labels_url":{"type":"string","format":"uri-template"},"languages_url":{"type":"string","format":"uri"},"merges_url":{"type":"string","format":"uri"},"milestones_url":{"type":"string","format":"uri-template"},"name":{"type":"string","description":"The name of the repository."},"node_id":{"type":"string"},"notifications_url":{"type":"string","format":"uri-template"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"private":{"type":"boolean","description":"Whether the repository is private or public."},"pulls_url":{"type":"string","format":"uri-template"},"releases_url":{"type":"string","format":"uri-template"},"stargazers_url":{"type":"string","format":"uri"},"statuses_url":{"type":"string","format":"uri-template"},"subscribers_url":{"type":"string","format":"uri"},"subscription_url":{"type":"string","format":"uri"},"tags_url":{"type":"string","format":"uri"},"teams_url":{"type":"string","format":"uri"},"trees_url":{"type":"string","format":"uri-template"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Repository Lite';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"archive_url":"generated_archive_url_uri-template","assignees_url":"generated_assignees_url_uri-template","blobs_url":"generated_blobs_url_uri-template","branches_url":"generated_branches_url_uri-template","collaborators_url":"generated_collaborators_url_uri-template","comments_url":"generated_comments_url_uri-template","commits_url":"generated_commits_url_uri-template","compare_url":"generated_compare_url_uri-template","contents_url":"generated_contents_url_uri-template","contributors_url":"https:\\/\\/example.com\\/","deployments_url":"https:\\/\\/example.com\\/","description":"generated_description_null","downloads_url":"https:\\/\\/example.com\\/","events_url":"https:\\/\\/example.com\\/","fork":false,"forks_url":"https:\\/\\/example.com\\/","full_name":"generated_full_name_null","git_commits_url":"generated_git_commits_url_uri-template","git_refs_url":"generated_git_refs_url_uri-template","git_tags_url":"generated_git_tags_url_uri-template","hooks_url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","id":13,"issue_comment_url":"generated_issue_comment_url_uri-template","issue_events_url":"generated_issue_events_url_uri-template","issues_url":"generated_issues_url_uri-template","keys_url":"generated_keys_url_uri-template","labels_url":"generated_labels_url_uri-template","languages_url":"https:\\/\\/example.com\\/","merges_url":"https:\\/\\/example.com\\/","milestones_url":"generated_milestones_url_uri-template","name":"generated_name_null","node_id":"generated_node_id_null","notifications_url":"generated_notifications_url_uri-template","owner":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"private":false,"pulls_url":"generated_pulls_url_uri-template","releases_url":"generated_releases_url_uri-template","stargazers_url":"https:\\/\\/example.com\\/","statuses_url":"generated_statuses_url_uri-template","subscribers_url":"https:\\/\\/example.com\\/","subscription_url":"https:\\/\\/example.com\\/","tags_url":"https:\\/\\/example.com\\/","teams_url":"https:\\/\\/example.com\\/","trees_url":"generated_trees_url_uri-template","url":"https:\\/\\/example.com\\/"}';
    /**
     * id: Unique identifier of the repository
     * name: The name of the repository.
     * private: Whether the repository is private or public.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('archive_url')] public string $archiveUrl, #[\EventSauce\ObjectHydrator\MapFrom('assignees_url')] public string $assigneesUrl, #[\EventSauce\ObjectHydrator\MapFrom('blobs_url')] public string $blobsUrl, #[\EventSauce\ObjectHydrator\MapFrom('branches_url')] public string $branchesUrl, #[\EventSauce\ObjectHydrator\MapFrom('collaborators_url')] public string $collaboratorsUrl, #[\EventSauce\ObjectHydrator\MapFrom('comments_url')] public string $commentsUrl, #[\EventSauce\ObjectHydrator\MapFrom('commits_url')] public string $commitsUrl, #[\EventSauce\ObjectHydrator\MapFrom('compare_url')] public string $compareUrl, #[\EventSauce\ObjectHydrator\MapFrom('contents_url')] public string $contentsUrl, #[\EventSauce\ObjectHydrator\MapFrom('contributors_url')] public string $contributorsUrl, #[\EventSauce\ObjectHydrator\MapFrom('deployments_url')] public string $deploymentsUrl, public ?string $description, #[\EventSauce\ObjectHydrator\MapFrom('downloads_url')] public string $downloadsUrl, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public string $eventsUrl, public bool $fork, #[\EventSauce\ObjectHydrator\MapFrom('forks_url')] public string $forksUrl, #[\EventSauce\ObjectHydrator\MapFrom('full_name')] public string $fullName, #[\EventSauce\ObjectHydrator\MapFrom('git_commits_url')] public string $gitCommitsUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_refs_url')] public string $gitRefsUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_tags_url')] public string $gitTagsUrl, #[\EventSauce\ObjectHydrator\MapFrom('hooks_url')] public string $hooksUrl, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('issue_comment_url')] public string $issueCommentUrl, #[\EventSauce\ObjectHydrator\MapFrom('issue_events_url')] public string $issueEventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('issues_url')] public string $issuesUrl, #[\EventSauce\ObjectHydrator\MapFrom('keys_url')] public string $keysUrl, #[\EventSauce\ObjectHydrator\MapFrom('labels_url')] public string $labelsUrl, #[\EventSauce\ObjectHydrator\MapFrom('languages_url')] public string $languagesUrl, #[\EventSauce\ObjectHydrator\MapFrom('merges_url')] public string $mergesUrl, #[\EventSauce\ObjectHydrator\MapFrom('milestones_url')] public string $milestonesUrl, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('notifications_url')] public string $notificationsUrl, public ?Schema\WebhookWorkflowRunCompleted\WorkflowRun\HeadRepository\Owner $owner, public bool $private, #[\EventSauce\ObjectHydrator\MapFrom('pulls_url')] public string $pullsUrl, #[\EventSauce\ObjectHydrator\MapFrom('releases_url')] public string $releasesUrl, #[\EventSauce\ObjectHydrator\MapFrom('stargazers_url')] public string $stargazersUrl, #[\EventSauce\ObjectHydrator\MapFrom('statuses_url')] public string $statusesUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscribers_url')] public string $subscribersUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscription_url')] public string $subscriptionUrl, #[\EventSauce\ObjectHydrator\MapFrom('tags_url')] public string $tagsUrl, #[\EventSauce\ObjectHydrator\MapFrom('teams_url')] public string $teamsUrl, #[\EventSauce\ObjectHydrator\MapFrom('trees_url')] public string $treesUrl, public string $url)
    {
    }
}
