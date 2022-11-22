<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Request\Http;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;

class HttpClient
{
    protected ClientInterface $client;

    protected HttpClientConfiguration $configuration;

    public function __construct(HttpClientConfiguration $configuration)
    {
        $this->client = new Client();
        $this->configuration = $configuration;
    }

    public function requestAsync(RequestInterface $request): PromiseInterface
    {
        return $this->client->sendAsync($request, $this->configuration->toArray());
    }

    public function getConfiguration(): HttpClientConfiguration
    {
        return $this->configuration;
    }
}
