<?php

namespace Baijunyao\DesignPatterns\Bridge;

/**
 * 三角形
 *
 * Class Triangle
 * @package Baijunyao\DesignPatterns\Bridge
 */
class Triangle extends Graph
{
    /**
     * @return mixed|void
     */
    public function draw()
    {
        echo "画一个 {$this->color->run()} 的三角形";
    }
}