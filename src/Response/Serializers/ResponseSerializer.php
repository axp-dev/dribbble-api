<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Response\Serializers;

use AXP\DribbbleApi\Client\Client;
use AXP\DribbbleApi\Response\Adapters\OnDecodeContext;
use AXP\DribbbleApi\Response\Exceptions\ApiResponseException;
use AXP\DribbbleApi\Response\Interfaces\ResponseInterface;
use AXP\DribbbleApi\Response\Interfaces\ResponseSerializerInterface;
use AXP\DribbbleApi\Response\Response;
use JsonMapper\JsonMapperFactory;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class ResponseSerializer implements ResponseSerializerInterface
{
    public function __construct(
        protected Client $client,
        protected Response $response
    ) {
    }

    protected function getResponse(): Response
    {
        return $this->response;
    }

    public function decode(HttpResponseInterface $response, Client $client): ResponseInterface
    {
        $responseInstance = $this->getResponse();
        $responseInstance->onDecode(new OnDecodeContext($client));

        $mapper = (new JsonMapperFactory())->default();
        $mapper->mapObjectFromString((string) $response->getBody(), $responseInstance);

        if (!$responseInstance->isSuccess()) {
            throw new ApiResponseException($responseInstance);
        }

        return $responseInstance;
    }
}
