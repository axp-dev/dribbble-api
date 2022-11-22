<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Traits;

use AXP\DribbbleApi\Response\Responses\Common\HeaderResponse;
use AXP\DribbbleApi\Utils\PromiseUtils;
use GuzzleHttp\Promise\PromiseInterface;

trait MakeAttachmentsRequestAccessible
{
    public function createAttachment(int $shotId, mixed $file): HeaderResponse
    {
        return PromiseUtils::wait($this->getClient()->createAttachment($shotId, $file));
    }

    public function createAttachmentPromise(int $shotId, mixed $file): PromiseInterface
    {
        return $this->getClient()->createAttachment($shotId, $file);
    }

    public function deleteAttachment(int $shotId, int $attachmentId): HeaderResponse
    {
        return PromiseUtils::wait($this->getClient()->deleteAttachment($shotId, $attachmentId));
    }

    public function deleteAttachmentPromise(int $shotId, int $attachmentId): PromiseInterface
    {
        return $this->getClient()->deleteAttachment($shotId, $attachmentId);
    }
}
