<?php

namespace Baijunyao\DesignPatterns\ObjectAdapter;

/**
 * 目标类接口
 *
 * Interface Target
 * @package Baijunyao\DesignPatterns\ObjectAdapter
 */
interface Target
{
    /**
     * 支付
     *
     * @return mixed
     */
    public function pay();

    /**
     * 通知
     *
     * @return mixed
     */
    public function notify();
}
