<?php

namespace Baijunyao\DesignPatterns\FactoryMethod;

/**
 * 工厂抽象类
 *
 * Class Factory
 * @package Baijunyao\DesignPatterns\FactoryMethod
 */
abstract class Factory
{
    /**
     * 创建产品
     *
     * @return mixed
     */
    abstract public function create();
}