<?php

namespace MPW\Services\Wallet\Collection;

use MPW\Base;

class WalletCollection
{
    private $base;
    public $method;

    public function __construct(Base $base)
    {
        $this->base = $base;
        $this->method = new Method\WalletCollectionMethod($base);
    }

    public function initiate($payload)
    {
        try {
            $res = $this->base->client->post('wallet/collection/initiate', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error initiating wallet collection: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }
}
