<?php

namespace Baijunyao\DesignPatterns\Decorator;

/**
 * 肠
 *
 * Class Sausage
 * @package Baijunyao\DesignPatterns\Decorator
 */
class Sausage extends Decorator
{
    /**
     * 名称
     *
     * @return mixed|string
     */
    public function name()
    {
        return $this->food->name() . '+肠';
    }

    /**
     * 价格
     *
     * @return int|mixed
     */
    public function price()
    {
        return $this->food->price() + 2;
    }
}