<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Sonnenglas\AmazonFulfillmentCenters\AmazonFulfillmentCenters;

class AmazonFulfillmentCentersTest extends TestCase
{

    public function testGetAll()
    {
        $centers = new AmazonFulfillmentCenters();
        $centers = $centers->getAll();
        $this->assertTrue(is_array($centers));
        $this->assertEquals('DE', $centers['BER3']['country']);
    }

    public function testGetByCode()
    {
        $centers = new AmazonFulfillmentCenters();
        $center = $centers->getByCode('BER3');
        $this->assertTrue(is_array($center));
        $this->assertEquals('DE', $center['country']);
    }

}
