<?php

namespace MPW\Services\Wallet;

use MPW\Base;

class WalletTransactions
{
    private $base;

    public function __construct(Base $base)
    {
        $this->base = $base;
    }

    public function custodial($payload)
    {
        try {
            $res = $this->base->client->post('wallet/transactions', ['code' => 'internal', ...$payload]);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error retrieving custodial wallet transactions: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function nonCustodial($payload)
    {
        try {
            $res = $this->base->client->post('wallet/transactions', ['code' => 'external', ...$payload]);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error retrieving non-custodial wallet transactions: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }
}
