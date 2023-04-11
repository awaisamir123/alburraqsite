<?php

/*
 * Seo/ E-Commerce System API
 * Copyright Parts Square LLC, 2016
 * All Rights Reserved
 * Author: Daniel Hofmann
 *
 * All data transmitted via this API is Copyright Parts Square LLC.
 * The end user may not store, transmit to third parties, or copy the data in any way, except for short term caching purposes only.
 */

require_once ("Api.php");

class SeoApi extends Api
{
    const URI_GET_TOP_PARTS = '/catalog/api/v1/seo/top-parts';
    const URI_GET_TOP_MAKES = '/catalog/api/v1/seo/top-makes';
    const URI_GET_TOP_MAKE_MODEL = '/catalog/api/v1/seo/top-make-model';
    const URI_GET_TOP_MAKE_PARTS = '/catalog/api/v1/seo/top-make-parts';

    public function __construct()
    {
        // load the configuration file
        $config = include('config.php');
        parent::__construct($config);
    }

    public function getTopParts() {
        return $this->get(self::URI_GET_TOP_PARTS);
    }

    public function getTopMakes() {
        return $this->get(self::URI_GET_TOP_MAKES);
    }

    public function getTopMakeModels() {
        return $this->get(self::URI_GET_TOP_MAKE_MODEL);
    }

    public function getTopMakeParts($make) {
        return $this->get(self::URI_GET_TOP_MAKE_PARTS, array('make' => $make));
    }

}