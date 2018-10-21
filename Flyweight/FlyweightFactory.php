<?php

namespace Baijunyao\DesignPatterns\Flyweight;

/**
 * 享元工厂
 *
 * Class FlyweightFactory
 *
 * @package Baijunyao\DesignPatterns\Flyweight
 */
class FlyweightFactory
{
    /**
     * @var array
     */
    private $flyweights = [];

    /**
     * @param $name
     *
     * @return mixed
     */
    public function getFlyweight($name)
    {
        if(!isset($this->flyweights[$name])){
            $this->flyweights[$name]=new ConcreteFlyweight($name);
        }
        return $this->flyweights[$name];
    }
}