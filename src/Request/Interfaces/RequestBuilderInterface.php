<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Request\Interfaces;

use GuzzleHttp\Psr7\Request;

interface RequestBuilderInterface
{
    public function build(): Request;
}
