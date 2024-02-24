<?php

namespace MPW\Services\Wallet\Transfer;

use MPW\Base;

class WalletTransferCustodial
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
            throw new \Exception('Error with custodial single wallet transfer: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function bulk($payload)
    {
        try {
            $res = $this->base->client->post('wallet/transfer/bulk', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error with custodial bulk wallet transfer: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function bulkWithFileUpload($payload)
    {
        try {
            $res = $this->base->client->post('wallet/transfer/bulk', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error with custodial bulk wallet transfer with file upload: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }
}
