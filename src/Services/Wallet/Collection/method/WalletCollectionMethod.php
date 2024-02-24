<?php

namespace MPW\Services\Wallet\Collection\Method;

use MPW\Base;

class WalletCollectionMethod
{
    private $base;
    public $fiat;
    public $crypto;

    public function __construct(Base $base)
    {
        $this->base = $base;
        $this->fiat = new WalletCollectionMethodFiat($this->base);
        $this->crypto = new WalletCollectionMethodCrypto($this->base);
    }
}
