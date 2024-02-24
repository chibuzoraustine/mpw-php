<?php

namespace MPW\Services\User;

use MPW\Base;

class User
{
    private $base;
    public $verification;

    public function __construct(Base $base)
    {
        $this->base = $base;
        $this->verification = new UserVerification($base);
    }

    public function create($payload)
    {
        try {
            $response = $this->base->client->post('user/create', [
                'json' => $payload
            ]);
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error creating user: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function update($payload)
    {
        try {
            $response = $this->base->client->post('user/update', [
                'json' => $payload
            ]);
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error updating user: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function details($payload)
    {
        try {
            $response = $this->base->client->post('user/details', [
                'json' => $payload
            ]);
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error getting user details: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }
}
