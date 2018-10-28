<?php

namespace Baijunyao\DesignPatterns\Proxy;

/**
 * 真实主题
 *
 * Class RealSubject
 *
 * @package Baijunyao\DesignPatterns\Proxy
 */
class RealSubject implements Subject
{
    /**
     * 执行操作
     */
    public function action()
    {
        echo '执行操作';
    }
}