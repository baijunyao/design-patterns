<?php

namespace Baijunyao\DesignPatterns\Command;

/**
 * 命令接收者
 *
 * @package Baijunyao\DesignPatterns\Command
 */
class Receiver
{
    /**
     * 执行操作
     */
    public function action()
    {
        echo '执行操作';
    }
}