<?php

namespace Baijunyao\DesignPatterns\Iterator;

/**
 * 姓名迭代器
 *
 * @package Baijunyao\DesignPatterns\Iterator
 */
class NameIterator implements IteratorInterface
{
    /**
     * @var array
     */
    protected $nameArray = [];

    /**
     * @var int
     */
    protected $index = 0;

    /**
     * NameIterator constructor.
     *
     * @param $nameArray
     */
    public function __construct($nameArray)
    {
        $this->nameArray = $nameArray;
    }

    /**
     * 判断是否还有下一个姓名
     *
     * @return bool|mixed
     */
    public function hasNext()
    {
        return $this->index < count($this->nameArray);
    }

    /**
     * 下一个姓名
     *
     * @return mixed|void
     */
    public function next()
    {
        if ($this->hasNext()) {
            echo $this->nameArray[$this->index] . '<br>';
            $this->index++;
        }
    }
}