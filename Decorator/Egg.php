<?php

namespace Baijunyao\DesignPatterns\Decorator;

/**
 * 蛋
 *
 * Class Egg
 * @package Baijunyao\DesignPatterns\Decorator
 */
class Egg extends Decorator
{
    /**
     * 名称
     *
     * @return mixed|string
     */
    public function name()
    {
        return $this->food->name() . '+蛋';
    }

    /**
     * 价格
     *
     * @return int|mixed
     */
    public function price()
    {
        return $this->food->price() + 1;
    }
}