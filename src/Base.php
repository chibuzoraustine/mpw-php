<?php

namespace MPW;

use GuzzleHttp\Client;

abstract class Base
{
    public $client;

    public function __construct($secretToken)
    {
        $this->client = new Client([
            'base_uri' => API_URL,
            'timeout'  => REQUEST_TIMEOUT,
            'headers' => [
                'Authorization' => 'Bearer ' . $secretToken,
                'Content-Type' => 'application/json',
                // Add any other headers if required
            ],
        ]);
    }
}