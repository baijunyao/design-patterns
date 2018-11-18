<?php

namespace Baijunyao\DesignPatterns\Command;

/**
 * 命令发送者
 *
 * @package Baijunyao\DesignPatterns\Command
 */
class Invoker
{
    /**
     * @var
     */
    protected $command;

    /**
     * @param \Baijunyao\DesignPatterns\Command\Command $command
     */
    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    /**
     * 执行
     */
    public function run()
    {
        $this->command->execute();
    }
}