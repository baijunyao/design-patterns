<?php

namespace Baijunyao\DesignPatterns\ObjectAdapter;

/**
 * 适配器
 *
 * Class Adapter
 * @package Baijunyao\DesignPatterns\ObjectAdapter
 */

class Adapter implements Target
{

    /**
     * Adapter constructor.
     * @param Adaptee $adaptee
     */
    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
        $adaptee->money = '$5';
    }

    /**
     * 支付
     *
     * @return mixed|void
     */
    public function pay()
    {
        $this->adaptee->pay();
    }

    /**
     * 通知
     *
     * @return mixed|void
     */
    public function notify()
    {
        echo '通知';
    }
}