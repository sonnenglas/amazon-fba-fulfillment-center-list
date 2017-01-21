Amazon FBA Fulfillment Centers List
============

This package provides localization data of all amazon FBA fulfillment centers across the world. There's a simple PSR4 php library and
 also a JSON formatted list which you can use in any other programming language.
 
The list contains information about country and for US-based centers also about state.

## Installation for PHP

1. `composer require sonnenglas/amazon-fba-fulfillment-center-list

## Usage in PHP

```
use Sonnenglas\AmazonFulfillmentCenters\AmazonFulfillmentCenters;

class ExampleClass
{
    public function someMethod()
    {
        $centers = new AmazonFulfillmentCenters();
        
        // Get list of all centers
        $centers = $centers->getAll();
   
        // Get information about BER3 center
        $center = $centers->getByCode('BER3');
    }
}
```

## Usage in any other language
 
The JSON formatted list is located in:
```
src/data/amazon-fulfillment-centers.json 
```
