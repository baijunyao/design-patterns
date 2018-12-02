<?php

namespace Baijunyao\DesignPatterns\Observer;

/**
 * 发短信
 *
 * @package Baijunyao\DesignPatterns\Observer
 */
class SMSObserver implements Observer
{
    /**
     * 执行操作
     */
    public function update()
    {
        echo '发送短信昭告天下<br>';
    }
}