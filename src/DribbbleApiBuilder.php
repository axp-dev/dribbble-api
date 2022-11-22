<?php

declare(strict_types=1);

namespace AXP\DribbbleApi;

use AXP\DribbbleApi\Client\Client;

final class DribbbleApiBuilder
{
    protected ?string $proxyUri = null;

    protected string $authToken;

    public function setProxyUri(string $proxyUri): self
    {
        $this->proxyUri = $proxyUri;

        return $this;
    }

    public function setAuthToken(string $authToken): self
    {
        $this->authToken = $authToken;

        return $this;
    }

    public function build(): DribbbleApi
    {
        $client = new Client($this->authToken, $this->proxyUri);

        return new DribbbleApi($client);
    }
}
