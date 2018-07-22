<?php

namespace Baijunyao\DesignPatterns\FactoryMethod;

/**
 * 乘法
 *
 * Class Mul
 * @package Baijunyao\DesignPatterns\FactoryMethod
 */
class Mul extends Operation
{
    /**
     * 计算结果
     *
     * @return float|int
     */
    public function getResult()
    {
        return $this->numberA * $this->numberB;
    }
}