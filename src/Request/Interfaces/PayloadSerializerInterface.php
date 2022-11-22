<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Request\Interfaces;

interface PayloadSerializerInterface
{
    public function encode(array $payload): string;
}
