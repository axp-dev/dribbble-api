<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Traits;

use AXP\DribbbleApi\Response\Responses\Jobs\JobResponse;
use AXP\DribbbleApi\Utils\PromiseUtils;
use GuzzleHttp\Promise\PromiseInterface;

trait MakeJobsRequestAccessible
{
    public function getJob(int $jobId): JobResponse
    {
        return PromiseUtils::wait($this->getClient()->getJob($jobId));
    }

    public function getJobPromise(int $jobId): PromiseInterface
    {
        return $this->getClient()->getJob($jobId);
    }

    public function createJob(array $params): JobResponse
    {
        return PromiseUtils::wait($this->getClient()->createJob($params));
    }

    public function createJobPromise(array $params): PromiseInterface
    {
        return $this->getClient()->createJob($params);
    }

    public function updateJob(int $jobId, array $params): JobResponse
    {
        return PromiseUtils::wait($this->getClient()->updateJob($jobId, $params));
    }

    public function updateJobPromise(int $jobId, array $params): PromiseInterface
    {
        return $this->getClient()->updateJob($jobId, $params);
    }
}
