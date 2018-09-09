<?php

namespace Baijunyao\DesignPatterns\Bridge;

/**
 * 黄色
 *
 * Class Yellow
 * @package Baijunyao\DesignPatterns\Bridge
 */
class Yellow extends Color
{
    /**
     * @return mixed|string
     */
    public function run()
    {
        return '黄色';
    }
}