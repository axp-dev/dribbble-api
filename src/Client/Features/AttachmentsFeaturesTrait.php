<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Client\Features;

use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Promise\PromiseInterface;

trait AttachmentsFeaturesTrait
{
    use DefaultFeaturesTrait;

    public function createAttachment(int $shotId, mixed $file): PromiseInterface
    {
        // @todo implements method

        return new Promise();
    }

    public function deleteAttachment(int $shotId, int $attachmentId): PromiseInterface
    {
        // @todo implements method

        return new Promise();
    }
}
