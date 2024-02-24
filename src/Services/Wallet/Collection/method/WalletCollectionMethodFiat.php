<?php

namespace MPW\Services\Wallet\Collection\Method;

use MPW\Base;

class WalletCollectionMethodFiat
{
    private $base;

    public function __construct(Base $base)
    {
        $this->base = $base;
    }

    public function info($payload)
    {
        try {
            $res = $this->base->client->post('wallet/collection/method/get-info', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error retrieving fiat collection method info: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function payWithUSSD($payload)
    {
        try {
            $res = $this->base->client->post('wallet/collection/method/ussd', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error processing fiat collection method payment with USSD: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function payToDynamicVirtualAccount($payload)
    {
        try {
            $res = $this->base->client->post('wallet/collection/method/dynamic-virtual-account', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error processing fiat collection method payment to dynamic virtual account: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function payWithCardNaked($payload)
    {
        try {
            $res = $this->base->client->post('wallet/collection/method/card-naked', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error processing fiat collection method payment with naked card: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function payWithCardEmbed($payload)
    {
        try {
            $res = $this->base->client->post('wallet/collection/method/card-embed', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error processing fiat collection method payment with embedded card: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function payWithSavedCardToken($payload)
    {
        try {
            $res = $this->base->client->post('wallet/collection/method/saved-card-token', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error processing fiat collection method payment with saved card token: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }
}
