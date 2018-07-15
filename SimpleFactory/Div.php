<?php

namespace Baijunyao\DesignPatterns\SimpleFactory;

/**
 * 除法
 *
 * Class Div
 * @package Baijunyao\DesignPatterns\SimpleFactory
 */
class Div extends Operation
{
    /**
     * 计算结果
     *
     * @return float|int
     */
    public function getResult()
    {
        if ($this->numberB == 0) {
            throw new \InvalidArgumentException('除数不能为0');
        }
        return $this->numberA / $this->numberB;
    }
}