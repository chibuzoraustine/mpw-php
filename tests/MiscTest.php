<?php

use MPW\MoiPayWay;
use PHPUnit\Framework\TestCase;

final class MiscTest extends TestCase
{
    public function testCountries()
    {
        $mpw = new MoiPayWay('f009bea3934e05c051121c4ab0dd841a');
        $countries = $mpw->misc->countries();
        // var_dump($countries["data"]);
        $this->assertTrue(count($countries["data"]) > 0);
    }
}