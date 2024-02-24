<?php

namespace MPW\Services\Wallet\Channel\TransferRecipient;

use MPW\Base;

class WalletChannelTransferRecipientNGN
{
    private $base;

    public function __construct(Base $base)
    {
        $this->base = $base;
    }

    public function single($payload)
    {
        try {
            $res = $this->base->client->post('wallet/channel/add-transfer-recipient-account', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error in single transfer recipient request: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function bulk($payload)
    {
        try {
            $res = $this->base->client->post('wallet/channel/add-transfer-recipient-account', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error in bulk transfer recipient request: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function csv($payload)
    {
        try {
            $res = $this->base->client->post('wallet/channel/add-transfer-recipient-account', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error in CSV transfer recipient request: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }
}
