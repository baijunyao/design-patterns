<?php

namespace Baijunyao\DesignPatterns\Iterator;

/**
 * 迭代器接口
 *
 * @package Baijunyao\DesignPatterns\Iterator
 */
interface IteratorInterface
{
    /**
     * 判断是否还有下一个
     *
     * @return mixed
     */
    public function hasNext();

    /**
     * 获取下一个
     *
     * @return mixed
     */
    public function next();
}