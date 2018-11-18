<?php

namespace Baijunyao\DesignPatterns\Command;

/**
 * 命令接口
 *
 * @package Baijunyao\DesignPatterns\Command
 */
interface CommandInterface
{

    /**
     * @return mixed
     */
    public function execute();
}