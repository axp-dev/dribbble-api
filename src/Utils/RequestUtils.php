<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Utils;

use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\UriInterface;

final class RequestUtils
{
    public static function createUri(string $host, string $path, array $queryParameters = []): UriInterface
    {
        $uri = new Uri();

        return $uri->withHost($host)
            ->withPath($path)
            ->withScheme('https')
            ->withQuery(self::createQuery($queryParameters));
    }

    protected static function createQuery(array $queryParameters): string
    {
        if (($parameters = http_build_query($queryParameters, '', '&')) == null) {
            return '';
        }

        return $parameters;
    }
}
