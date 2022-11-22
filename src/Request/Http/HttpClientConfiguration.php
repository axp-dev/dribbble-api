<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Request\Http;

use GuzzleHttp\RequestOptions;

class HttpClientConfiguration
{
    public function __construct(
        protected string $authToken,
        protected ?string $proxy = null
    ) {
    }

    public function toArray(): array
    {
        $configuration = [
            RequestOptions::HEADERS => [
                'Authorization' => sprintf('OAuth %s', $this->authToken)
            ]
        ];

        if ($this->proxy !== null) {
            $configuration['proxy'] = $this->proxy;
        }

        return $configuration;
    }
}
