<?php

namespace MPW\Services\Wallet\Collection\Method;

use MPW\Base;

class WalletCollectionMethodCrypto
{
    private $base;

    public function __construct(Base $base)
    {
        $this->base = $base;
    }

    public function chainAddress($payload)
    {
        try {
            $res = $this->base->client->post('wallet/collection/method/chain-address', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error in chain address request: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }
}
