<?php

namespace App\Services\Http;

interface HttpClientInterface
{
    public function getBaseUrl(): string;
}