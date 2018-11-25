<?php

namespace Baijunyao\DesignPatterns\Iterator;

/**
 * 姓名容器
 *
 * @package Baijunyao\DesignPatterns\Iterator
 */
class NameContainer implements ContainerInterface
{
    /**
     * @var array
     */
    protected $nameArray = [];

    /**
     * 增加一个名字
     *
     * @param $name
     *
     * @return mixed|void
     */
    public function add($name)
    {
        $this->nameArray[] = $name;
    }

    /**
     * 获取迭代器
     *
     * @return \Baijunyao\DesignPatterns\Iterator\NameIterator|mixed
     */
    public function getIterator()
    {
        return new NameIterator($this->nameArray);
    }
}