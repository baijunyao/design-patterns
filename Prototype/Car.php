<?php

namespace Baijunyao\DesignPatterns\Prototype;

/**
 * Class Car
 * @package Baijunyao\DesignPatterns\Prototype
 */
class Car
{
    /**
     * 车名
     *
     * @var
     */
    public $name;

    /**
     * 设置车名
     *
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}