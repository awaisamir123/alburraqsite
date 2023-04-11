<?php

// required, or API will return no results
$_SERVER['REMOTE_ADDR'] = "192.168.1.1";  // REPLACE WITH YOUR SERVER IP ADDRESS
$_SERVER['HTTP_USER_AGENT'] = "My API Example";
// end required fields

// include the Parts Square Catalog API
include "ps-api/CatalogApi.php";

// create the catalog Api
$catalogApi = new CatalogApi();

$year = '2018';
$make = 'BMW';
$model = '230i';
$submodel = '';
$engine = '';
$acesPartName = "Air Filter";
$brand_description = 'Beck Arnley';

/*
 *  You can return a list of products by base vehicle attributes (you may leave any of them blank)
 */

//$productArray = $catalogApi->getModels('Acura');


$productArray = $catalogApi->getProductList($year, $make, $model, $submodel, $engine, $acesPartName);
print_r($productArray);
exit();

/*
 * Or you can specify parameters and pass it to the getSearch API Call
 */


/* note: all parameters are CASE SENSITIVE */
$params = [
    /* base attributes are vehicle attributes */
    'base-attributes' => [

        'make_description' => $make,
        'model_description' => $model,
        'year_description' => $year,

        /* you can also specify the part name */
        'part_name_description' => $acesPartName,
        /* you can also specify a brand name */
        'brand_description' => $brand_description,

    ],

    'page-number' => 1, // page offset to grab the data from
    'page-offset' => 10, // number of SKUs/products per page
    'return-all-applications' => 1 // allow more than one application to be returned if a base vehicle (make_description, model_description, and year_description) is not set in the base attributes array

];

// get all products/applications matching the values passed into the params array
$productArray = $catalogApi->getSearch('', $params);
$productList = $productArray['productList'];





/*
 * You can also perform a full text search. This is the same as http://demo.square.parts/products/2014-Honda-Accord-Air-Filter
 *
 * You can also pass a $params array as the second parameter, to further narrow down (this would simulate a user entering a search term, then using the faceted navigation on the left hand side of the screen, to narrow down items)
 */

$search = "2014 Honda Accord Air Filter";
$productArray = $catalogApi->getSearch($search);

print_r($productArray);