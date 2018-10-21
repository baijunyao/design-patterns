<?php

namespace Baijunyao\DesignPatterns\Flyweight;

/**
 * 共享的具体享元类
 *
 * Class ConcreteFlyweight
 *
 * @package Baijunyao\DesignPatterns\Flyweight
 */
class ConcreteFlyweight extends Flyweight
{
    /**
     * @param $content
     */
    public function show($content)
    {
        echo '共享的享元：' . $this->name . $content . '<br>';
    }
}