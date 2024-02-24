<?php

namespace MPW\Services\Wallet\Exchange;

use MPW\Base;

class WalletExchange
{
    private $base;
    public $custodial;
    public $nonCustodial;

    public function __construct(Base $base)
    {
        $this->base = $base;
        $this->custodial = new WalletExchangeCustodial($base);
        $this->nonCustodial = new WalletExchangeNonCustodial($base);
    }
}
