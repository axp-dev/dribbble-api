<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Request\Interfaces;

interface HeadersBuilderInterface
{
    public function build(): array;
}
