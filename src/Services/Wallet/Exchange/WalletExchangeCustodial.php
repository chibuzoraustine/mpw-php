<?php

namespace MPW\Services\Wallet\Exchange;

use MPW\Base;

class WalletExchangeCustodial
{
    private $base;

    public function __construct(Base $base)
    {
        $this->base = $base;
    }

    public function initiate($payload)
    {
        try {
            $requestData = array_merge(['code' => 'internal'], $payload);
            $res = $this->base->client->post('wallet/exchange/initiate', $requestData);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error with custodial wallet exchange initiation: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function calculate($payload)
    {
        try {
            $requestData = array_merge(['code' => 'internal'], $payload);
            $res = $this->base->client->post('wallet/exchange/calculate', $requestData);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error with custodial wallet exchange calculation: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }
}
