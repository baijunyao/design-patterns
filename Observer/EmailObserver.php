<?php

namespace Baijunyao\DesignPatterns\Observer;

/**
 * 发邮件
 *
 * @package Baijunyao\DesignPatterns\Observer
 */
class EmailObserver implements Observer
{
    /**
     * 执行操作
     */
    public function update()
    {
        echo '发送邮件昭告天下<br>';
    }
}