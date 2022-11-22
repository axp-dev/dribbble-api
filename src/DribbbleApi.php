<?php

declare(strict_types=1);

namespace AXP\DribbbleApi;

use AXP\DribbbleApi\Client\Client;
use AXP\DribbbleApi\Traits\MakeRequestsAccessible;

final class DribbbleApi
{
    use MakeRequestsAccessible;

    public function __construct(protected Client $client)
    {
    }

    public static function builder(): DribbbleApiBuilder
    {
        return new DribbbleApiBuilder();
    }

    protected function getClient(): Client
    {
        return $this->client;
    }
}
