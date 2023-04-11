<?php

/*
 * Catalog/ E-Commerce System API Cache
 * Copyright Parts Square LLC, 2016
 * All Rights Reserved
 * Author: Daniel Hofmann
 *
 * All data transmitted and stored via this API is Copyright Parts Square LLC.
 * The end user may not store, transmit to third parties, or copy the data in any way, except for short term caching purposes only.
 */
require_once 'ApiUtils.php';

abstract class Cache {

    private $cacheClass;
    private $classMethod;
    private $parameters;
    private $parametersHash;
    private $config;
    private $cacheHit;

    public function __construct()
    {
        // load the configuration file
        $this->config = include('cache-config.php');
    }

    protected function setCacheInstance($class, $method, $values = array()) {
        $this->cacheClass = $class;
        $this->classMethod = $method;
        $this->parameters = $values;
        $flat = ApiUtils::array_values_recursive($values);
        $this->parametersHash = md5(implode(',', $flat));
    }

    protected function isCacheEnabled() {

        // check to see if cache is globally turned off
        if ($this->config['cache-enabled'] === false) {
            return false;
        }

        // if cache is globally on, check and see if the class::method() is set to be cached
        if (isset($this->config['classes'][$this->cacheClass][$this->classMethod]) && $this->config['classes'][$this->cacheClass][$this->classMethod] === true ) {
            return true;
        }

        // cache is not set for the class::method(), so return false
        return false;
    }

    public function getCache() {
        if (!$this->isCacheEnabled()) {
            return false;
        }
        $this->cacheHit = false;
        if (function_exists('apc_fetch')) {
            $result = apc_fetch($this->cacheClass . '::' . $this->classMethod . '::' . $this->parametersHash, $this->cacheHit);
            return $result;
        }
        return null;
    }

    public function hasCache() {
        if (!$this->isCacheEnabled()) {
            return false;
        }
        return $this->cacheHit;
    }

    public function setCache($value) {
        if (!$this->isCacheEnabled()) {
            return false;
        }
        if (function_exists('apc_store')) {
            apc_store($this->cacheClass . '::' . $this->classMethod . '::' . $this->parametersHash, $value);
        }
    }

}