<?php

namespace MPW\Services\Token;

use MPW\Base;

class Token
{
    private $base;
    public $storage;
    public $multi;

    public function __construct(Base $base)
    {
        $this->base = $base;
        $this->storage = new TokenStorage($this->base);
        $this->multi = new TokenMulti($this->base);
    }
}