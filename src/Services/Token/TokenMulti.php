<?php

namespace MPW\Services\Token;

use MPW\Base;

class TokenMulti
{
    private $base;

    public function __construct(Base $base)
    {
        $this->base = $base;
    }

    public function details($payload)
    {
        try {
            $res = $this->base->client->post('token/multitoken/details', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error retrieving multi token details: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function deploy($payload)
    {
        try {
            $res = $this->base->client->post('token/multitoken/deploy', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error deploying multi token: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function mint($payload)
    {
        try {
            $res = $this->base->client->post('token/multitoken/mint', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error minting multi token: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function transfer($payload)
    {
        try {
            $res = $this->base->client->post('token/multitoken/transfer', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error transferring multi token: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function burn($payload)
    {
        try {
            $res = $this->base->client->post('token/multitoken/burn', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error burning multi token: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }
}
