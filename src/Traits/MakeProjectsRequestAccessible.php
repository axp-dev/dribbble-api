<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Traits;

use AXP\DribbbleApi\Response\Responses\Projects\ProjectResponse;
use AXP\DribbbleApi\Response\Responses\Projects\ProjectsListResponse;
use AXP\DribbbleApi\Utils\PromiseUtils;
use GuzzleHttp\Promise\PromiseInterface;

trait MakeProjectsRequestAccessible
{
    public function getProjectsList(): ProjectsListResponse
    {
        return PromiseUtils::wait($this->getClient()->getProjectsList());
    }

    public function getProjectsListPromise(): PromiseInterface
    {
        return $this->getClient()->getProjectsList();
    }

    public function createProject(array $params): ProjectResponse
    {
        return PromiseUtils::wait($this->getClient()->createProject($params));
    }

    public function createProjectPromise(array $params): PromiseInterface
    {
        return $this->getClient()->createProject($params);
    }

    public function updateProject(int $projectId, array $params): ProjectResponse
    {
        return PromiseUtils::wait($this->getClient()->updateProject($projectId, $params));
    }

    public function updateProjectPromise(int $projectId, array $params): PromiseInterface
    {
        return $this->getClient()->updateProject($projectId, $params);
    }

    public function deleteProject(int $projectId): ProjectResponse
    {
        return PromiseUtils::wait($this->getClient()->deleteProject($projectId));
    }

    public function deleteProjectPromise(int $projectId): PromiseInterface
    {
        return $this->getClient()->deleteProject($projectId);
    }
}
