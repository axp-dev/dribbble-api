<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Client\Features;

use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Promise\PromiseInterface;

trait ProjectsFeaturesTrait
{
    use DefaultFeaturesTrait;

    public function getProjectsList(): PromiseInterface
    {
        // @todo implements method

        return new Promise();
    }

    public function createProject(array $params): PromiseInterface
    {
        // @todo implements method

        return new Promise();
    }

    public function updateProject(int $projectId, array $params): PromiseInterface
    {
        // @todo implements method

        return new Promise();
    }

    public function deleteProject(int $projectId): PromiseInterface
    {
        // @todo implements method

        return new Promise();
    }
}
