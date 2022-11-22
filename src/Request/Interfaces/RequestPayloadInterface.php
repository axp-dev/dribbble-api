<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Request\Interfaces;

interface RequestPayloadInterface
{
    public function payload(): array;
}
