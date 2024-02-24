<?php

namespace MPW;

use MPW\Services\Authentication;
use MPW\Base;
use MPW\Services\Token;
use MPW\Services\Misc;
use MPW\Services\User;
use MPW\Services\Verification;
use MPW\Services\Wallet;

class MoiPayWay
{
    private $secret_token;
    private $base;
    
    public $user;
    public $misc;
    public $verification;
    public $token;
    public $wallet;

    public function __construct($secret_token)
    {
        $this->secret_token = $secret_token;
        $this->base = new Base($this->secret_token);
        $this->user = new User\User($this->base);
        $this->misc = new Misc($this->base);
        $this->verification = new Verification($this->base);
        $this->token = new Token\Token($this->base);
        $this->wallet = new Wallet\Wallet($this->base);
    }

    public static function initiate($payload)
    {
        return Authentication::initiate($payload);
    }

    public static function connect($access_token, $payload)
    {
        return Authentication::connect($access_token, $payload);
    }
}
