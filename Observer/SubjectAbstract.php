<?php

namespace Baijunyao\DesignPatterns\Observer;

/**
 * Observer 抽象类
 *
 * @package Baijunyao\DesignPatterns\Observer
 */
abstract class SubjectAbstract
{
    /**
     * @var array
     */
    private $observers = [];

    /**
     * @param \Baijunyao\DesignPatterns\Observer\Observer $observer
     */
    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * 通知
     */
    public function notify()
    {
        foreach ($this->observers as $k => $v) {
            $v->update();
        }
    }
}