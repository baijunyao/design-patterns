<?php

namespace Baijunyao\DesignPatterns\Bridge;

/**
 * 正方形
 *
 * Class Square
 * @package Baijunyao\DesignPatterns\Bridge
 */
class Square extends Graph
{
    /**
     * @return mixed|void
     */
    public function draw()
    {
        echo "画一个 {$this->color->run()} 的正方形";
    }
}