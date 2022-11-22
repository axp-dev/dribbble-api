<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Request\Serializers;

use AXP\DribbbleApi\Request\Interfaces\PayloadSerializerInterface;

class UrlEncodePayloadSerializer implements PayloadSerializerInterface
{
    public function encode(array $payload): string
    {
        return http_build_query(data: $payload, arg_separator: '&');
    }
}
