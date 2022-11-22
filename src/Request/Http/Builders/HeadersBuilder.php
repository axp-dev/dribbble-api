<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Request\Http\Builders;

use AXP\DribbbleApi\Request\Interfaces\HeadersBuilderInterface;

class HeadersBuilder implements HeadersBuilderInterface
{
    public static function builder(): HeadersBuilder
    {
        return new HeadersBuilder();
    }

    public function build(): array
    {
        return [
            'User-Agent' => 'PHP Client Dribbble Api',
        ];
    }
}
