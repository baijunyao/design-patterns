<?php

namespace Baijunyao\DesignPatterns\Bridge;

/**
 * 形状抽象类
 *
 * Class Graph
 * @package Baijunyao\DesignPatterns\Bridge
 */
abstract class Graph
{
    /**
     * 颜色
     *
     * @var Color
     */
    protected $color;

    /**
     * Graph constructor.
     * @param Color $color
     */
    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    abstract public function draw();
}