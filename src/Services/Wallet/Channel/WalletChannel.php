<?php

namespace MPW\Services\Wallet\Channel;

use MPW\Base;

class WalletChannel
{
    private $base;
    public $transferRecipient;

    public function __construct(Base $base)
    {
        $this->base = $base;
        $this->transferRecipient = new TransferRecipient\WalletChannelTransferRecipient($base);
    }

    public function details($payload)
    {
        try {
            $res = $this->base->client->post('wallet/channel/details', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error retrieving wallet channel details: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function remove($payload)
    {
        try {
            $res = $this->base->client->post('wallet/channel/remove', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error removing wallet channel: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function virtualAccount($payload)
    {
        try {
            $res = $this->base->client->post('wallet/channel/generate-virtual-account', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error generating virtual account: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function chainAddress($payload)
    {
        try {
            $res = $this->base->client->post('wallet/channel/generate-chain-address', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error generating chain address: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function download($payload)
    {
        try {
            $res = $this->base->client->post('wallet/channel/generate-downloadable-file', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error generating downloadable file: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }
}
