<?php

namespace Baijunyao\DesignPatterns\Bridge;

/**
 * 红色
 *
 * Class Red
 * @package Baijunyao\DesignPatterns\Bridge
 */
class Red extends Color
{
    /**
     * @return mixed|string
     */
    public function run()
    {
        return '红色';
    }
}