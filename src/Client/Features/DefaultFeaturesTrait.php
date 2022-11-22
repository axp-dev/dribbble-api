<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Client\Features;

use AXP\DribbbleApi\Request\Http\HttpClient;
use AXP\DribbbleApi\Request\Request;
use AXP\DribbbleApi\Response\Response;
use GuzzleHttp\Promise\PromiseInterface;

trait DefaultFeaturesTrait
{
    protected HttpClient $client;

    abstract protected function buildRequest(string $uri, Response $response, string $method = 'POST'): Request;

    abstract protected function call(Request $request): PromiseInterface;
}
