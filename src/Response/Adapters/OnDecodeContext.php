<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Response\Adapters;

use AXP\DribbbleApi\Client\Client;

final class OnDecodeContext
{
    public function __construct(protected Client $client)
    {
    }

    public function getClient(): Client
    {
        return $this->client;
    }
}
