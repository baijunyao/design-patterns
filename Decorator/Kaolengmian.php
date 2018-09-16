<?php

namespace Baijunyao\DesignPatterns\Decorator;

/**
 * 烤冷面
 *
 * Class Kaolengmian
 * @package Baijunyao\DesignPatterns\Decorator
 */
class Kaolengmian implements Food
{
    /**
     * 名称
     *
     * @return mixed|string
     */
    public function name()
    {
        return '烤冷面';
    }

    /**
     * 价格
     *
     * @return int|mixed
     */
    public function price()
    {
        return 6;
    }
}