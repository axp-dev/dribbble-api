<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Response\Exceptions;

use AXP\DribbbleApi\Exceptions\DribbbleApiException;
use AXP\DribbbleApi\Response\Interfaces\ResponseInterface;

class ApiResponseException extends DribbbleApiException
{
    const DEFAULT_MESSAGE = 'Invalid response';

    protected ResponseInterface $response;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;

        parent::__construct(self::getMessageOrFallback($response));
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    protected static function getMessageOrFallback(ResponseInterface $response): string
    {
        return $response->getErrorMessage() ?? self::DEFAULT_MESSAGE;
    }
}
