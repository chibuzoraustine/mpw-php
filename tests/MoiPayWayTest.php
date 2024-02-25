<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use MPW\MoiPayWay;

class MoiPayWayTest extends TestCase
{
    public function testConstructor()
    {
        $mpw = new MoiPayWay('test_secret_key');
        $this->assertInstanceOf(MoiPayWay::class, $mpw);
    }

    // Add more test cases for other methods
}