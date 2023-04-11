<?php

/*
 * Catalog/ E-Commerce System API
 * Copyright Parts Square LLC, 2016
 * All Rights Reserved
 * Author: Daniel Hofmann
 *
 * All data transmitted via this API is Copyright Parts Square LLC.
 * The end user may not store, transmit to third parties, or copy the data in any way, except for short term caching purposes only.
 */

include ("Api.php");

class CatalogApi extends Api
{
    const URI_GET_YEARS = '/catalog/api/v1/vehicle/decade-year';
    const URI_GET_MAKES = '/catalog/api/v1/vehicle/make/?';
    const URI_GET_MODELS = '/catalog/api/v1/vehicle/model/?/?';
    const URI_GET_SUBMODELS = '/catalog/api/v1/vehicle/submodel/?/?/?';
    const URI_GET_ENGINES = '/catalog/api/v1/vehicle/engine/?/?/?/?';
    const URI_GET_PRODUCT_NAMES = '/catalog/api/v1/product/names/?/?/?/?/?';
    const URI_GET_PRODUCT_LIST = '/catalog/api/v1/product/list';
    const URI_CART_ADD = '/catalog/api/v1/cart/add';
    const URI_CART_UPDATE = '/catalog/api/v1/cart/update';
    const URI_CART_DELETE = '/catalog/api/v1/cart/delete';
    const URI_CART_VIEW = '/catalog/api/v1/cart';
    const URI_CHECKOUT_ADDRESS_INFO = '/catalog/api/v1/checkout/address/info';
    const URI_CHECKOUT_COUNTRIES = '/catalog/api/v1/checkout/address/states/?';
    const URI_CHECKOUT_SUBMIT_ORDER = '/catalog/api/v1/checkout/submit-order';
    const URI_USER_CREATE = '/catalog/api/v1/user/create';
    const URI_USER_LOGIN = '/catalog/api/v1/user/login';
    const URI_USER_ORDERS = '/catalog/api/v1/user/orders';
    const URI_USER_ORDER = '/catalog/api/v1/user/order/?';
    const URI_USER_ADDRESSES = '/catalog/api/v1/user/addresses';
    const URI_USER_ADDRESSES_SAVE = '/catalog/api/v1/user/addresses/save';
    const URI_USER_CHANGE_PASSWORD = '/catalog/api/v1/user/password/change';

    private $currencyCode;

    public function __construct()
    {
        // load the configuration file
        $config = include('config.php');
        parent::__construct($config);

        if (isset($config['currency_code'])) {
            $this->setCurrencyCode($config['currency_code']);
        }
    }

    public function getYearsDecade() {
        return $this->get(self::URI_GET_YEARS);
    }

    public function getMakes($year = null) {
        return $this->get(self::URI_GET_MAKES, array(), $year);
    }

    public function getModels($year = null, $make) {
        return $this->get(self::URI_GET_MODELS, array(), $year, $make);
    }

    public function getSubModels($year, $make, $model) {
        return $this->get(self::URI_GET_SUBMODELS, array(), $year, $make, $model);
    }

    public function getEngines($year, $make, $model, $submodel) {
        return $this->get(self::URI_GET_ENGINES, array(), $year, $make, $model, $submodel);
    }

    public function getProductNames($year, $make, $model, $submodel, $engine, $params = array()) {
        return $this->get(self::URI_GET_PRODUCT_NAMES, $params, $year, $make, $model, $submodel, $engine);
    }

    public function getProductList($year, $make, $model, $submodel, $engine, $part, $queryParams = array(), $userToken = null) {
        $params = array();
        if (trim($year) != '') { $params['year'] = $year; }
        if (trim($make) != '') { $params['make'] = $make; }
        if (trim($model) != '') { $params['model'] = $model; }
        if (trim($submodel) != '') { $params['submodel'] = $submodel; }
        if (trim($engine) != '') { $params['engine'] = $engine; }
        if (trim($part) != '') { $params['product-name'] = $part; }

        $params = array_merge($params, $queryParams);

        if (!is_null($userToken)) {
            $params = array_merge($params, array('user_token' => $userToken));
        }

        if (!is_null($this->currencyCode)) {
            $params = array_merge($params, array('currency_code' => $this->currencyCode));
        }

        return $this->get(self::URI_GET_PRODUCT_LIST, $params);
    }

    public function getSearch($searchQuery, $queryParams = array(), $seoParameters = array(), $userToken = null) {
        $params = array();
        if (trim($searchQuery) != '') { $params['search-query'] = $searchQuery; }

        $params = array_merge($params, $queryParams);

        $params = array_merge($params, array('seo' => $seoParameters));

        if (!is_null($userToken)) {
            $params = array_merge($params, array('user_token' => $userToken));
        }

        if (!is_null($this->currencyCode)) {
            $params = array_merge($params, array('currency_code' => $this->currencyCode));
        }

        return $this->get(self::URI_GET_PRODUCT_LIST, $params);
    }

    public function cartAdd($params, $userId) {
        $params = array_merge($params, array('user_id' => $userId));
        return $this->get(self::URI_CART_ADD, $params);
    }

    public function cartUpdate($params, $userId, $userToken = null) {
        $params = array_merge($params, array('user_id' => $userId));
        if (!is_null($userToken)) {
            $params = array_merge($params, array('user_token' => $userToken));
        }
        if (!is_null($this->currencyCode)) {
            $params = array_merge($params, array('currency_code' => $this->currencyCode));
        }
        return $this->get(self::URI_CART_UPDATE, $params);
    }

    public function cartDelete($params, $userId) {
        $params = array_merge($params, array('user_id' => $userId));
        return $this->get(self::URI_CART_DELETE, $params);
    }

    public function cartView($userId, $zipcode = null, $userToken = null) {
        $params = array('user_id' => $userId);
        if (!is_null($zipcode)) {
            $params['zipcode'] = $zipcode;
        }

        if (!is_null($userToken)) {
            $params = array_merge($params, array('user_token' => $userToken));
        }

        if (!is_null($this->currencyCode)) {
            $params = array_merge($params, array('currency_code' => $this->currencyCode));
        }

        return $this->get(self::URI_CART_VIEW, $params);
    }

    public function getCheckoutAddressInfo($params = array()) {
        return $this->get(self::URI_CHECKOUT_ADDRESS_INFO, $params);
    }

    public function getShipping($address, $userId, $userToken = null) {
        $address = array_merge($address, array('user_id' => $userId));

        if (!is_null($userToken)) {
            $address = array_merge($address, array('user_token' => $userToken));
        }

        $result = $this->get(self::URI_CART_VIEW, $address);

        if (isset($result['paymentProvider'])) {
            $this->paymentProvider = $result['paymentProvider'];
        }

        return $result;

    }

    public function submitOrder($orderArray, $userToken = null) {

        if (!is_null($userToken)) {
            $orderArray = array_merge($orderArray, array('user_token' => $userToken));
        }

        if (!is_null($this->currencyCode)) {
            $orderArray = array_merge($orderArray, array('currency_code' => $this->currencyCode));
        }

        return $this->post(self::URI_CHECKOUT_SUBMIT_ORDER, $orderArray);
    }

    public function registerUserAccount($fields) {
        return $this->post(self::URI_USER_CREATE, $fields);
    }

    public function loginUserAccount($fields) {
        return $this->post(self::URI_USER_LOGIN, $fields);
    }

    public function getUserAccountOrders($userToken, $options) {
        $params = array_merge(array('user_token' => $userToken), $options);
        return $this->post(self::URI_USER_ORDERS, $params);
    }

    public function getUserAccountOrder($userToken, $orderId) {
        $params = array('user_token' => $userToken);
        return $this->post(self::URI_USER_ORDER, $params, $orderId);
    }

    public function getUserAccountAddresses($userToken) {
        $params = array('user_token' => $userToken);
        return $this->post(self::URI_USER_ADDRESSES, $params);
    }

    public function saveUserAccountAddresses($userToken, $fields) {
        $params = array('user_token' => $userToken);
        $params = array_merge($params, $fields);
        return $this->post(self::URI_USER_ADDRESSES_SAVE, $params);
    }

    // address APIs
    public function getStatesByCountryCode($countryCode) {
        return $this->get(self::URI_CHECKOUT_COUNTRIES, array(), $countryCode);
    }

    public function changePassword($userToken, $fields) {
        $params = array('user_token' => $userToken);
        $params = array_merge($params, $fields);
        return $this->post(self::URI_USER_CHANGE_PASSWORD, $params);
    }

    public function setCurrencyCode($currencyCode) {
        $this->currencyCode = $currencyCode;
    }

    public function getCurrencyCode($currencyCode) {
        $this->currencyCode = $currencyCode;
    }



}