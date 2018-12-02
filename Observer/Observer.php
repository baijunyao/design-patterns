<?php

namespace Baijunyao\DesignPatterns\Observer;

/**
 * Observer 接口
 *
 * @package Baijunyao\DesignPatterns\Observer
 */
interface Observer
{
    /**
     * @return mixed
     */
    public function update();
}