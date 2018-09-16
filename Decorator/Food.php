<?php

namespace Baijunyao\DesignPatterns\Decorator;

/**
 * 食物
 *
 * Interface Food
 * @package Baijunyao\DesignPatterns\Decorator
 */
interface Food
{
    /**
     * 名称
     *
     * @return mixed
     */
    public function name();

    /**
     * 价格
     *
     * @return mixed
     */
    public function price();
}