<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Response\Interfaces;

use AXP\DribbbleApi\Client\Client;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

interface ResponseSerializerInterface
{
    public function decode(HttpResponseInterface $response, Client $client): ResponseInterface;
}
