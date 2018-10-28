<?php

namespace Baijunyao\DesignPatterns\Proxy;

/**
 * 代理
 *
 * Class Proxy
 *
 * @package Baijunyao\DesignPatterns\Proxy
 */
class Proxy implements Subject
{
    /**
     * 真实主题
     *
     * @var \Baijunyao\DesignPatterns\Proxy\RealSubject
     */
    protected $realSubject;

    /**
     * Proxy constructor.
     */
    public function __construct()
    {
        $this->realSubject = new RealSubject();
    }

    /*
     * 执行操作
     */
    public function action()
    {
        $this->realSubject->action();
    }

}