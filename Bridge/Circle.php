<?php

namespace Baijunyao\DesignPatterns\Bridge;

/**
 * 圆形
 *
 * Class Circle
 * @package Baijunyao\DesignPatterns\Bridge
 */
class Circle extends Graph
{
    /**
     * @return mixed|void
     */
    public function draw()
    {
        echo "画一个 {$this->color->run()} 的圆形";
    }
}