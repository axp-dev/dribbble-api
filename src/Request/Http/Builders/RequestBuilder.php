<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Request\Http\Builders;

use AXP\DribbbleApi\Request\Enums\PayloadSerializers;
use AXP\DribbbleApi\Request\Factories\PayloadSerializerFactory;
use AXP\DribbbleApi\Request\Interfaces\RequestBuilderInterface;
use AXP\DribbbleApi\Utils\RequestUtils;
use GuzzleHttp\Psr7\Request;

class RequestBuilder implements RequestBuilderInterface
{
    protected const ENDPOINT_URL = 'api.dribbble.com/v2';

    protected array $queryParameters = [];

    protected array $payload = [];

    protected PayloadSerializers $payloadSerializerType = PayloadSerializers::URL_ENCODED;

    public function __construct(protected string $uri, protected string $method)
    {
    }

    public function addPayloadParam(string $name, $value): self
    {
        $this->payload[$name] = $value;

        return $this;
    }

    public function setPayload(array $payload): self
    {
        $this->payload = $payload;

        return $this;
    }

    public function addQueryParam(string $name, $value): self
    {
        $this->queryParameters[$name] = $value;

        return $this;
    }

    public function setPayloadSerializerType(PayloadSerializers $payloadSerializerType): self
    {
        $this->payloadSerializerType = $payloadSerializerType;

        return $this;
    }

    public function build(): Request
    {
        $serializer = PayloadSerializerFactory::create($this->payloadSerializerType);

        return new Request(
            $this->method,
            RequestUtils::createUri(self::ENDPOINT_URL, $this->uri, $this->queryParameters),
            HeadersBuilder::builder()->build(),
            $serializer->encode($this->payload)
        );
    }
}
