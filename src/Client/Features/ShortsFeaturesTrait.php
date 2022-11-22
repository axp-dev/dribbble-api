<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Client\Features;

use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Promise\PromiseInterface;

trait ShortsFeaturesTrait
{
    use DefaultFeaturesTrait;

    public function getShotsList(): PromiseInterface
    {
        // @todo implements method

        return new Promise();
    }

    public function getShot(int $shotId): PromiseInterface
    {
        // @todo implements method

        return new Promise();
    }

    public function createShot(array $params): PromiseInterface
    {
        // @todo implements method

        return new Promise();
    }

    public function updateShot(int $shotId, array $params): PromiseInterface
    {
        // @todo implements method

        return new Promise();
    }

    public function deleteShot(int $shotId): PromiseInterface
    {
        // @todo implements method

        return new Promise();
    }
}
