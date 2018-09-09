<?php

namespace Baijunyao\DesignPatterns\Bridge;

/**
 * 绿色
 *
 * Class Green
 * @package Baijunyao\DesignPatterns\Bridge
 */
class Green extends Color
{
    /**
     * @return mixed|string
     */
    public function run()
    {
        return '绿色';
    }
}