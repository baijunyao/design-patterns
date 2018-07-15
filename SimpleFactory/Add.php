<?php

namespace Baijunyao\DesignPatterns\SimpleFactory;

/**
 * 加法
 *
 * Class Add
 * @package Baijunyao\DesignPatterns\SimpleFactory
 */
class Add extends Operation
{
    /**
     * 计算结果
     *
     * @return int
     */
    public function getResult()
    {
        return $this->numberA + $this->numberB;
    }
}