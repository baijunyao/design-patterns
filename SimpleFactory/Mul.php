<?php

namespace Baijunyao\DesignPatterns\SimpleFactory;

/**
 * 乘法
 *
 * Class Mul
 * @package Baijunyao\DesignPatterns\SimpleFactory
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