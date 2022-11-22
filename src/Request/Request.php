<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Request;

use AXP\DribbbleApi\Request\Enums\PayloadSerializers;
use AXP\DribbbleApi\Request\Http\Builders\RequestBuilder;
use AXP\DribbbleApi\Response\Interfaces\ResponseSerializerInterface;
use GuzzleHttp\Psr7\Request as Psr7Request;

class Request
{
    use RequestBuilderMethods;

    public function __construct(
        protected RequestBuilder $requestBuilder,
        protected ResponseSerializerInterface $serializer
    ) {
    }

    public function setPayloadSerializerType(PayloadSerializers $serializerType): self
    {
        $this->requestBuilder->setPayloadSerializerType($serializerType);

        return $this;
    }

    public function getSerializer(): ResponseSerializerInterface
    {
        return $this->serializer;
    }

    public function setResponseSerializer(ResponseSerializerInterface $serializer): self
    {
        $this->serializer = $serializer;

        return $this;
    }

    public function toHttpRequest(): Psr7Request
    {
        return $this->requestBuilder->build();
    }
}
