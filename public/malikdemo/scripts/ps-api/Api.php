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

require_once "Benchmark.php";
require_once "Cache.php";

abstract class Api extends Cache
{
    // request class members
    private $responseContent;
    private $responseInfo;
    private $responseError;
    private $responseErrorNumber;
    private $connectionTimeout;
    private $executionTimeout;
    private $postParams = array();

    // configuration class members
    private $config;
    private $baseConfig;
    private $hostName;
    private $apiKey;
    private $creditCardPublicKey;

    protected $benchmark;

    protected $paymentProvider;

    const REQUEST_TYPE_GET = 'get';
    const REQUEST_TYPE_POST = 'post';

    public function __construct($config)
    {
        // set the configuration
        $this->config = $config[$config['mode']];
        $this->baseConfig = $config;
        $this->init();

        parent::__construct();
    }


    private function init() {

        if (isset($this->config['hostname'])) {
            $this->hostName = $this->config['hostname'];
        }
        if (isset($this->config['api-key'])) {
            $this->apiKey = $this->config['api-key'];
        }
        if (isset($this->config['connection-timeout'])) {
            $this->connectionTimeout = $this->config['connection-timeout'];
        }
        if (isset($this->config['execution-timeout'])) {
            $this->executionTimeout = $this->config['execution-timeout'];
        }
        if (isset($this->config['credit-card-public-key'])) {
            $this->creditCardPublicKey = $this->config['credit-card-public-key'];
        }
        $this->benchmark = new Benchmark();
    }

    protected function get($endpoint, $paramArray = array()) {

        // bind our function class and method call, and it's parameters, for any future cache calls
        $debug = debug_backtrace();
        $this->setCacheInstance(get_called_class(), $debug[1]['function'], array_merge(array($endpoint), $paramArray));

        // get any optional REST GET variables, to apply to the URI
        $args = func_get_args();
        $parameters = array_slice($args, 2);

        if (!empty($parameters)) {
            $endpoint = $this->bind($endpoint, $parameters);
        }

        // add the API key to every request
        $params = '?';
        $params .= "api_token=" . $this->getApiKey();
        $params .= "&remote_addr=" . $_SERVER['REMOTE_ADDR'];

        // add any additional parameters as GET
        if (!empty($paramArray)) {
            $params .= '&' . http_build_query($paramArray);
        }

        $value = $this->getCache();
        if ($this->hasCache()) {
            //echo debug_backtrace()[1]['function'] . " has cache!<br>";
            return $value;
        } else {
            $value = json_decode($this->sendRequest($endpoint, $params), true);
            $this->setCache($value);
            return $value;
        }
    }

    protected function post($endpoint, $paramArray = array()) {

        // get any optional REST GET variables, to apply to the URI
        $args = func_get_args();
        $parameters = array_slice($args, 2);

        if (!empty($parameters)) {
            $endpoint = $this->bind($endpoint, $parameters);
        }

        // add the API key to every request
        $params = '?';
        $params .= "api_token=" . $this->getApiKey();
        $params .= "&remote_addr=" . $_SERVER['REMOTE_ADDR'];

        // add any additional parameters as POST
        if (!empty($paramArray)) {
           $this->addPostData($paramArray);
        }

        return json_decode($this->sendRequest($endpoint, $params), true);
    }



    private function sendRequest($endPoint, $queryString, $type = self::REQUEST_TYPE_GET) {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, ($this->getHostName() . $endPoint . $queryString));
        echo $this->getHostName() . $endPoint . $queryString; die();
        //echo $this->getHostName() . $endPoint . $queryString; die();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_ENCODING, '');

        // disable SSL check in sandbox mode
        if ($this->config['sandbox-mode']) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        }
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , $this->getConnectionTimeOut());
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->getExecutionTimeOut());
        curl_setopt($ch, CURLOPT_POST, count($this->getPostData()));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->getPostDataUri());
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-Forwarded-For: {$_SERVER['REMOTE_ADDR']}"));

        //curl_setopt($ch, CURLOPT_VERBOSE, 1);
        //curl_setopt($ch, CURLOPT_HEADER, 1);

        $this->setResponseInfo(curl_getinfo($ch));
        $this->setResponseContent((curl_exec($ch)));

        //$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        //$header = substr($this->getResponseContent(), 0, $header_size);
        //echo "<pre>";print_r($header);
        //echo "<pre>";print_r(curl_getinfo($ch));die();
        $this->setResponseError(curl_error($ch));
        $this->setResponseErrorNumber(curl_errno($ch));
        curl_close($ch);

        //if ($_SERVER['REMOTE_ADDR'] == '134.56.170.135') echo  $this->getResponseContent(); die();
        // echo  $this->getResponseContent(); die();
        return $this->getResponseContent();
    }

    protected function bind($uri) {

        $args = func_get_args();
        $parameters = array_slice($args, 1);

        foreach ($parameters[0] as $arg) {
            $uri = $this->str_replace_first('?', rawurlencode(rawurlencode($arg)), $uri); // double encoding is necessary to avoid issues with characters such as /, which is interpreted as a literal / by all web servers, even though it is encoded
        }

        // trim any excess forward slashes
        $uri = rtrim($uri, '/');

        return $uri;

    }

    private function addPostData($paramsArray) {
        $this->postParams = array_merge($this->postParams, $paramsArray);

    }
    private function getPostData() {
        return array_merge($this->postParams, $this->getMetaData());
    }

    private function getMetaData() {
        $meta = array(
            'remote_address' =>  $_SERVER['REMOTE_ADDR'],
            'user_agent' =>  $_SERVER['HTTP_USER_AGENT'],
        );

        return $meta;
    }

    private function getPostDataUri() {
        $uri = http_build_query($this->getPostData());
        return $uri;
    }

    private function str_replace_first($from, $to, $subject)
    {
        $from = '/'.preg_quote($from, '/').'/';

        return preg_replace($from, $to, $subject, 1);
    }

    private function encodeForwardSlash($string) {
        return str_replace('/', '&#47;', $string);
    }

    /**
     * @return mixed
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @return mixed
     */
    public function getConnectionTimeout()
    {
        return $this->connectionTimeout;
    }

    /**
     * @return mixed
     */
    public function getExecutionTimeout()
    {
        return $this->executionTimeout;
    }

    /**
     * @return mixed
     */
    public function getBenchmark()
    {
        return $this->benchmark;
    }

    /**
     * @return mixed
     */
    public function getHostName()
    {
        return $this->hostName;
    }

    /**
     * @return mixed
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @return mixed
     */
    public function getResponseContent()
    {
        return $this->responseContent;
    }

    /**
     * @param mixed $responseContent
     */
    public function setResponseContent($responseContent)
    {
        $this->responseContent = $responseContent;
    }

    /**
     * @return mixed
     */
    public function getResponseInfo()
    {
        return $this->responseInfo;
    }

    /**
     * @param mixed $responseInfo
     */
    public function setResponseInfo($responseInfo)
    {
        $this->responseInfo = $responseInfo;
    }

    /**
     * @return mixed
     */
    public function getResponseError()
    {
        return $this->responseError;
    }

    /**
     * @param mixed $responseError
     */
    public function setResponseError($responseError)
    {
        $this->responseError = $responseError;
    }

    /**
     * @return mixed
     */
    public function getResponseErrorNumber()
    {
        return $this->responseErrorNumber;
    }

    /**
     * @param mixed $responseErrorNumber
     */
    public function setResponseErrorNumber($responseErrorNumber)
    {
        $this->responseErrorNumber = $responseErrorNumber;
    }

    /**
     * @return mixed
     */
    public function getCreditCardPublicKey()
    {
        // pull the key from the API (comes from your dashboard settings in https://manager.square.parts)
        if (isset($this->baseConfig['use-payment-info-from-api']) && $this->baseConfig['use-payment-info-from-api'] && !is_null($this->paymentProvider) && isset($this->paymentProvider['api_public_key'])) {
            return $this->paymentProvider['api_public_key'];
        }

        return $this->creditCardPublicKey;
    }

    /**
     * @param mixed $creditCardPublicKey
     */
    public function setCreditCardPublicKey($creditCardPublicKey)
    {
        $this->creditCardPublicKey = $creditCardPublicKey;
    }

    /**
     * @return mixed
     */
    public function getBaseConfig()
    {
        return $this->baseConfig;
    }

    /**
     * @return mixed
     */
    public function getPaymentProvider()
    {
        return $this->paymentProvider;
    }

    /**
     * @return mixed
     */
    public function getPaymentProviderName()
    {
        // pull the name from the API (comes from your dashboard settings in https://manager.square.parts)
        if (isset($this->baseConfig['use-payment-info-from-api']) && $this->baseConfig['use-payment-info-from-api'] && !is_null($this->paymentProvider) && isset($this->paymentProvider['payment_provider_key'])) {
            return $this->paymentProvider['payment_provider_key'];
        } else {
            return $this->config['credit-card-provider-name'];
        }
    }

    /**
     * @return mixed
     */
    public function getPaymentProviderSandboxMode()
    {
        // pull the name from the API (comes from your dashboard settings in https://manager.square.parts)
        if (isset($this->baseConfig['use-payment-info-from-api']) && $this->baseConfig['use-payment-info-from-api'] && !is_null($this->paymentProvider) && isset($this->paymentProvider['sandbox_mode'])) {
            return $this->paymentProvider['sandbox_mode'];
        } else {
            return $this->config['credit-card-sandbox-mode'];
        }
    }

    /**
     * @return mixed
     */
    public function getPaymentProviderApiLoginId()
    {
        // pull the name from the API (comes from your dashboard settings in https://manager.square.parts)
        if (isset($this->baseConfig['use-payment-info-from-api']) && $this->baseConfig['use-payment-info-from-api'] && !is_null($this->paymentProvider) && isset($this->paymentProvider['api_login_id'])) {
            return $this->paymentProvider['api_login_id'];
        } else {
            return $this->config['credit-card-api-login-id'];
        }
    }

    /**
     * @return mixed
     */
    public function getPaymentProviderJavascriptInclude()
    {
        $name = $this->getPaymentProviderName();
        if ($this->getPaymentProviderSandboxMode()) {
            return $this->baseConfig['payment-provider'][$name]['javascript']['sandbox'];
        } else {
            return $this->baseConfig['payment-provider'][$name]['javascript']['production'];
        }

    }
}