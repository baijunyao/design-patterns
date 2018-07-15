<?php

namespace Baijunyao\DesignPatterns\SimpleFactory;

/**
 * 减法
 *
 * Class Sub
 * @package Baijunyao\DesignPatterns\SimpleFactory
 */
class Sub extends Operation
{
    /**
     * 计算结果
     *
     * @return int|mixed
     */
    public function getResult()
    {
        return $this->numberA - $this->numberB;
    }
}