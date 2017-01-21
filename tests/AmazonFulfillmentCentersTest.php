<?php

use Sonnenglas\AmazonFulfillmentCenters\AmazonFulfillmentCenters;

class AmazonFulfillmentCentersTest extends PHPUnit_Framework_TestCase
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