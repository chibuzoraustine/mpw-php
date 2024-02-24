<?php

namespace MPW\Services\Wallet;

use MPW\Base;

class WalletCreate
{
    private $base;

    public function __construct(Base $base)
    {
        $this->base = $base;
    }

    public function fiat($payload)
    {
        try {
            $res = $this->base->client->post('wallet/create', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error creating fiat wallet: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function crypto($payload)
    {
        try {
            $res = $this->base->client->post('wallet/create', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error creating crypto wallet: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }
}
