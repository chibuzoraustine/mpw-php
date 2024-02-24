<?php

namespace MPW\Services;

use GuzzleHttp\Client;

class Authentication
{
    public static function initiate($payload)
    {
        $http = new Client([
            'base_uri' => API_URL,
            'timeout'  => REQUEST_TIMEOUT,
            'headers' => [
                // 'Authorization' => 'Bearer ' . $secretToken,
                'Content-Type' => 'application/json',
                // Add any other headers if required
            ],
        ]);
        $req = $http->post('authentication/initiate', $payload);
        return json_decode($req->data, true);
    }

    public static function connect($connectionToken, $payload)
    {
        $http = new Client([
            'base_uri' => API_URL,
            'timeout'  => REQUEST_TIMEOUT,
            'headers' => [
                'Authorization' => 'Bearer ' . $connectionToken,
                'Content-Type' => 'application/json',
                // Add any other headers if required
            ],
        ]);
        $req = $http->post('authentication/connect', $payload);
        return json_decode($req->data, true);
    }
}
