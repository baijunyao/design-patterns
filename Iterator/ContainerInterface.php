<?php

namespace Baijunyao\DesignPatterns\Iterator;

/**
 * 容器接口
 *
 * @package Baijunyao\DesignPatterns\Iterator
 */
interface ContainerInterface
{
    /**
     * 增加一个名字
     *
     * @param $name
     *
     * @return mixed
     */
    public function add($name);

    /**
     * 获取迭代器
     *
     * @return mixed
     */
    public function getIterator();
}