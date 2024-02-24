<?php

namespace MPW\Services\Wallet\Transfer;

use MPW\Base;

class WalletTransfer
{
    private $base;
    public $custodial;
    public $nonCustodial;

    public function __construct(Base $base)
    {
        $this->base = $base;
        $this->custodial = new WalletTransferCustodial($base);
        $this->nonCustodial = new WalletTransferNonCustodial($base);
    }
}
