<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Response;

use AXP\DribbbleApi\Client\Client;
use AXP\DribbbleApi\Response\Adapters\OnDecodeContext;
use AXP\DribbbleApi\Response\Interfaces\ResponseInterface;
use AXP\DribbbleApi\Response\Interfaces\OnResponseDecodeInterface;

abstract class Response implements ResponseInterface, OnResponseDecodeInterface
{
    protected Client $client;

    protected array $errors;

    protected string $message;

    public function isSuccess(): bool
    {
        return !$this->errors;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function getErrorMessage(): string
    {
        return $this->message;
    }

    public function onDecode(OnDecodeContext $context): void
    {
        $this->client = $context->getClient();
    }
}
