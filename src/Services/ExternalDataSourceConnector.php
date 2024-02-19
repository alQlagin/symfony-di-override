<?php

namespace App\Services;

use App\Services\Http\HttpClientInterface;

class ExternalDataSourceConnector
{
    private HttpClientInterface $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    function getBaseUrl(): string
    {
        return $this->client->getBaseUrl();
    }
}