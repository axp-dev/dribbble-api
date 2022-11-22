<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Request;

use AXP\DribbbleApi\Request\Enums\PayloadSerializers;
use AXP\DribbbleApi\Request\Interfaces\RequestPayloadInterface;

trait RequestBuilderMethods
{
    public function addQueryParam(string $parameter, $value): self
    {
        $this->requestBuilder->addQueryParam($parameter, $value);

        return $this;
    }

    public function addPayloadParam(string $parameter, $value): self
    {
        $this->requestBuilder->addPayloadParam($parameter, $value);

        return $this;
    }

    public function setPayload(array $payload, PayloadSerializers $serializerType = PayloadSerializers::URL_ENCODED): self
    {
        $this->requestBuilder->setPayload($payload);
        $this->requestBuilder->setPayloadSerializerType($serializerType);

        return $this;
    }

    public function addQueryParamIfNotNull(string $name, $value): self
    {
        if ($value === null) {
            return $this;
        }

        return $this->addQueryParam($name, $value);
    }

    public function addPayloadParams(RequestPayloadInterface $payload): self
    {
        foreach ($payload->payload() as $payload => $value) {
            $this->addPayloadParam($payload, $value);
        }

        return $this;
    }
}
