<?php

namespace MPW\Services\Wallet;

use MPW\Base;

class Wallet
{
    private $base;
    public $create;
    public $channel;
    public $collection;
    public $transfer;
    public $details;
    public $transactions;
    public $exchange;

    public function __construct(Base $base)
    {
        $this->base = $base;
        $this->create = new WalletCreate($base);
        $this->channel = new Channel\WalletChannel($base);
        $this->collection = new Collection\WalletCollection($base);
        $this->transfer = new Transfer\WalletTransfer($base);
        $this->details = new WalletDetails($base);
        $this->transactions = new WalletTransactions($base);
        $this->exchange = new Exchange\WalletExchange($base);
    }    

    public function update($payload)
    {
        try {
            $res = $this->base->client->post('wallet/update', $payload);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error updating wallet: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }
}
