<?php namespace Divsmith\IlluminateAirlock\Config;

use Divsmith\Airlock\Airlock;
use Illuminate\Config\Repository as IlluminateRepository;

abstract class Repository extends Airlock {

    public function __construct(IlluminateRepository $repo)
    {
        $this->locker = $repo;
    }

    public function parseKey()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setParsedKey()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function has()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function hasGroup()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function get()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function set()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function package()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function afterLoading()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function addNamespace()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getNamespaces()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getLoader()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setLoader()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getEnvironment()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getAfterLoadCallbacks()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getItems()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function offsetExists()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function offsetGet()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function offsetSet()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function offsetUnset()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }
} 