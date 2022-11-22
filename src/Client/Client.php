<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Client;

use AXP\DribbbleApi\Client\Features\AttachmentsFeaturesTrait;
use AXP\DribbbleApi\Client\Features\JobsFeaturesTrait;
use AXP\DribbbleApi\Client\Features\ProjectsFeaturesTrait;
use AXP\DribbbleApi\Client\Features\ShortsFeaturesTrait;
use AXP\DribbbleApi\Client\Features\UserFeaturesTrait;
use AXP\DribbbleApi\Request\Http\Builders\RequestBuilder;
use AXP\DribbbleApi\Request\Http\HttpClient;
use AXP\DribbbleApi\Request\Http\HttpClientConfiguration;
use AXP\DribbbleApi\Request\Request;
use AXP\DribbbleApi\Response\Interfaces\ResponseInterface;
use AXP\DribbbleApi\Response\Interfaces\ResponseSerializerInterface;
use AXP\DribbbleApi\Response\Response;
use AXP\DribbbleApi\Response\Serializers\ResponseSerializer;
use AXP\DribbbleApi\Utils\PromiseUtils;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\Create;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;
use Throwable;

class Client
{
    use AttachmentsFeaturesTrait;
    use JobsFeaturesTrait;
    use ProjectsFeaturesTrait;
    use ShortsFeaturesTrait;
    use UserFeaturesTrait;

    protected HttpClient $httpClient;

    public function __construct(string $authToken, ?string $proxyUri)
    {
        $this->httpClient = new HttpClient(new HttpClientConfiguration($authToken, $proxyUri));
    }

    public function call(Request $request): PromiseInterface
    {
        try {
            $httpRequest = $request->toHttpRequest();
        } catch (Throwable $e) {
            return Create::rejectionFor($e->getMessage());
        }

        return $this->doRequest($httpRequest, $request->getSerializer());
    }

    public function buildRequest(string $uri, Response $response, string $method = 'POST'): Request
    {
        return new Request(
            new RequestBuilder($uri, $method),
            new ResponseSerializer($this, $response)
        );
    }

    protected function doRequest(RequestInterface $request, ResponseSerializerInterface $serializer): PromiseInterface
    {
        $promise = $this->httpClient->requestAsync($request);

        return $promise->then(function (HttpResponseInterface $response) use ($serializer): PromiseInterface {
            return $this->decode($response, $serializer);
        })->otherwise(function (Throwable $exception) use ($serializer): PromiseInterface {
            return $this->decodeError($exception, $serializer);
        });
    }

    protected function decode(HttpResponseInterface $response, ResponseSerializerInterface $serializer): PromiseInterface
    {
        return PromiseUtils::task(function () use ($response, $serializer): ResponseInterface {
            return $serializer->decode($response, $this);
        });
    }

    protected function decodeError(Throwable $throwable, ResponseSerializerInterface $serializer): PromiseInterface
    {
        if (!self::isRequestException($throwable)) {
            return Create::rejectionFor($throwable);
        }

        return $this->decode($throwable->getResponse(), $serializer);
    }

    protected static function isRequestException(Throwable $exception): bool
    {
        return $exception instanceof RequestException;
    }
}
