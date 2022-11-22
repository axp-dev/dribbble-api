<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Client\Features;

use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Promise\PromiseInterface;

trait JobsFeaturesTrait
{
    use DefaultFeaturesTrait;

    public function getJob(int $jobId): PromiseInterface
    {
        // @todo implements method

        return new Promise();
    }

    public function createJob(array $params): PromiseInterface
    {
        // @todo implements method

        return new Promise();
    }

    public function updateJob(int $jobId, array $params): PromiseInterface
    {
        // @todo implements method

        return new Promise();
    }
}
