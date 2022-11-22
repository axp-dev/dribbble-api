<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Traits;

use AXP\DribbbleApi\Response\Responses\User\UserResponse;
use AXP\DribbbleApi\Utils\PromiseUtils;
use GuzzleHttp\Promise\PromiseInterface;

trait MakeUserRequestAccessible
{
    public function getUser(): UserResponse
    {
        return PromiseUtils::wait($this->getClient()->getUser());
    }

    public function getUserPromise(): PromiseInterface
    {
        return $this->getClient()->getUser();
    }
}
