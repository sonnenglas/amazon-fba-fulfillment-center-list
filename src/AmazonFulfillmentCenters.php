<?php

namespace Sonnenglas\AmazonFulfillmentCenters;

/**
 * Database of all existing Amazon fulfillment centers
 * Last updated: 2020-10-02
 */
class AmazonFulfillmentCenters
{

    protected $centers;
    protected $jsonFile = '/data/amazon-fulfillment-centers.json';

    /**
     * Get list of all amazon fulfillment centers
     *
     * @return array An array mapping fulfillmentcenter code to an
     *               `array(
     *                   'country' => string, // ISO3166-alpha-2 code
     *                   'state' => string, // two-letter state code, only for USA
     *               )`
     * @psalm-return array<string,array{country:string,state:string}>
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
     * @param string $code
     * @return array|false
     * @psalm-return false|array{country:string,state:string}
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