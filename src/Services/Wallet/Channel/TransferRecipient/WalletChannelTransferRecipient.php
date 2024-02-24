<?php

namespace MPW\Services\Wallet\Channel\TransferRecipient;

use MPW\Base;

class WalletChannelTransferRecipient
{
    private $base;
    public $eur;
    public $gbp;
    public $ngn;
    public $usd;

    public function __construct(Base $base)
    {
        $this->base = $base;
        $this->eur = new WalletChannelTransferRecipientEUR($this->base);
        $this->gbp = new WalletChannelTransferRecipientGBP($this->base);
        $this->ngn = new WalletChannelTransferRecipientNGN($this->base);
        $this->usd = new WalletChannelTransferRecipientUSD($this->base);
    }
}
