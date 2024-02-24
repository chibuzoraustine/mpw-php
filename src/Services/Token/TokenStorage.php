<?php

namespace MPW\Services\Token;

use MPW\Base;

class TokenStorage
{
    private $base;

    public function __construct(Base $base)
    {
        $this->base = $base;
    }

    public function upload($payload)
    {
        try {
            $formData = [
                [
                    'name' => 'file',
                    'contents' => $payload['file']
                ],
                [
                    'name' => 'chain',
                    'contents' => $payload['chain']
                ]
            ];
            $res = $this->base->client->post('token/storage/upload', [
                'multipart' => $formData
            ]);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error uploading to token storage: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function create($payload)
    {
        try {
            $res = $this->base->client->post('token/storage/create', [
                'json' => $payload
            ]);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error creating token storage: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function details($payload)
    {
        try {
            $res = $this->base->client->post('token/storage/details', [
                'json' => $payload
            ]);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error retrieving token storage details: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }
}
