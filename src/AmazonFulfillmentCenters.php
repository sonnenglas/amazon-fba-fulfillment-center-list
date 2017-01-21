<?php

namespace Sonnenglas\AmazonFulfillmentCenters;

/**
 * Database of all existing Amazon fulfillment centers
 * Last updated: 18.12.2016
 */
class AmazonFulfillmentCenters
{

    protected $centers;
    protected $jsonFile = '/data/amazon-fulfillment-centers.json';

    /**
     * Get list of all amazon fulfillment centers
     *
     * @return array
     */
    public function getAll()
    {
        if (!$this->centers) {
            $jsonData = file_get_contents(__DIR__ . $this->jsonFile);
            $this->centers = json_decode($jsonData, true);
        }
        return $this->centers;
    }

    /**
     * Get information about fulfillment center by its code or return false if it doesn't exist.
     *
     * @param $code
     * @return bool
     */
    public function getByCode($code)
    {
        $centers = $this->getAll();
        if (isset($centers[$code])) {
            return $centers[$code];
        }
        return false;
    }
}