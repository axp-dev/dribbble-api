<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Client\Features;

use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Promise\PromiseInterface;

trait UserFeaturesTrait
{
    use DefaultFeaturesTrait;

    public function getUser(): PromiseInterface
    {
        // @todo implements method

        return new Promise();
    }
}
