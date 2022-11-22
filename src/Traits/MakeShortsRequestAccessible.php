<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Traits;

use AXP\DribbbleApi\Response\Responses\Common\HeaderResponse;
use AXP\DribbbleApi\Response\Responses\Shorts\ShortResponse;
use AXP\DribbbleApi\Response\Responses\Shorts\ShortsListResponse;
use AXP\DribbbleApi\Utils\PromiseUtils;
use GuzzleHttp\Promise\PromiseInterface;

trait MakeShortsRequestAccessible
{
    public function getShotsList(): ShortsListResponse
    {
        return PromiseUtils::wait($this->getClient()->getShotsList());
    }

    public function getShotsListPromise(): PromiseInterface
    {
        return $this->getClient()->getShotsList();
    }

    public function getShot(int $shotId): ShortResponse
    {
        return PromiseUtils::wait($this->getClient()->getShot($shotId));
    }

    public function getShotPromise(int $shotId): PromiseInterface
    {
        return $this->getClient()->getShot($shotId);
    }

    public function createShot(array $params): ShortResponse
    {
        return PromiseUtils::wait($this->getClient()->createShot($params));
    }

    public function createShotPromise(array $params): PromiseInterface
    {
        return $this->getClient()->createShot($params);
    }

    public function updateShot(int $shotId, array $params): ShortResponse
    {
        return PromiseUtils::wait($this->getClient()->updateShot($shotId, $params));
    }

    public function updateShotPromise(int $shotId, array $params): PromiseInterface
    {
        return $this->getClient()->updateShot($shotId, $params);
    }

    public function deleteShot(int $shotId): HeaderResponse
    {
        return PromiseUtils::wait($this->getClient()->deleteShot($shotId));
    }

    public function deleteShotPromise(int $shotId): PromiseInterface
    {
        return $this->getClient()->deleteShot($shotId);
    }
}
