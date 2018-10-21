<?php

namespace Baijunyao\DesignPatterns\Flyweight;

/**
 * 享元抽象类
 *
 * Class Flyweight
 *
 * @package Baijunyao\DesignPatterns\Flyweight
 */
abstract class Flyweight
{
    /**
     * @var
     */
    protected $name;

    /**
     * Flyweight constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param $content
     */
    public function show($content){}
}

