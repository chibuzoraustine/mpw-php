<?php

namespace MPW\Services\Wallet\Transfer;

use MPW\Base;

class WalletTransferNonCustodial
{
    private $base;

    public function __construct(Base $base)
    {
        $this->base = $base;
    }

    public function single($payload)
    {
        try {
            $res = $this->base->client->post('wallet/transfer/single', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error with non-custodial single wallet transfer: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }
}
