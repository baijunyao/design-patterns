<?php

namespace Baijunyao\DesignPatterns\Command;

/**
 * 具体命令类
 *
 * @package Baijunyao\DesignPatterns\Command
 */
class Command implements CommandInterface
{
    /**
     * @var \Baijunyao\DesignPatterns\Command\Receiver
     */
    protected $receiver;

    /**
     * Command constructor.
     *
     * @param \Baijunyao\DesignPatterns\Command\Receiver $receiver
     */
    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * @return mixed|void
     */
    public function execute()
    {
        $this->receiver->action();
    }
}