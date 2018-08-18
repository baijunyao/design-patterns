<?php

namespace Baijunyao\DesignPatterns\Prototype;

/**
 * Class DeepDrive
 * @package Baijunyao\DesignPatterns\Prototype
 */
class DeepDrive
{

    private $car;

    /**
     * Drive constructor.
     */
    public function __construct()
    {
        echo '准备完成';
    }

    /**
     * 选择要开的车
     *
     * @param $car
     */
    public function setCar($car)
    {
        $this->car = $car;
    }

    public function show()
    {
        echo '开始驾驶'.$this->car->name;
        echo '<br>';
    }

    public function __clone()
    {
        $this->car = clone $this->car;
    }
}