<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Request\Factories;

use AXP\DribbbleApi\Request\Enums\PayloadSerializers;
use AXP\DribbbleApi\Request\Exceptions\InvalidPayloadSerializerException;
use AXP\DribbbleApi\Request\Interfaces\PayloadSerializerInterface;
use AXP\DribbbleApi\Request\Serializers\UrlEncodePayloadSerializer;

final class PayloadSerializerFactory
{
    public static function create(PayloadSerializers $type): PayloadSerializerInterface
    {
        return match ($type) {
            PayloadSerializers::URL_ENCODED => new UrlEncodePayloadSerializer(),
            default => throw new InvalidPayloadSerializerException(sprintf('Unexpected payload serializer %s', $type->name)),
        };
    }
}
