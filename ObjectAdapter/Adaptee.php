<?php

namespace Baijunyao\DesignPatterns\ObjectAdapter;

/**
 * 源类
 *
 * Class Target
 * @package Baijunyao\DesignPatterns\ObjectAdapter
 */
class Adaptee
{
    /**
     * 金额
     *
     * @var string
     */
    public $money = '￥34';

    /**
     * 支付
     */
    public function pay()
    {
        echo '支付' . $this->money;
    }
}