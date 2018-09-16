<?php

namespace Baijunyao\DesignPatterns\Decorator;

/**
 * 辣条
 *
 * Class Latiao
 * @package Baijunyao\DesignPatterns\Decorator
 */
class Latiao extends Decorator
{
    /**
     * 名称
     *
     * @return mixed|string
     */
    public function name()
    {
        return $this->food->name() . '+辣条';
    }

    /**
     * 价格
     *
     * @return int|mixed
     */
    public function price()
    {
        return $this->food->price() + 3;
    }
}