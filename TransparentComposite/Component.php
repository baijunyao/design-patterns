<?php

namespace Baijunyao\DesignPatterns\TransparentComposite;

/**
 * 包含树枝节点和叶子节点方法的抽象类
 *
 * Class Component
 * @package Baijunyao\DesignPatterns\TransparentComposite
 */
abstract class Component
{
    /**
     * @var
     */
    protected $name;

    /**
     * Component constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 添加子节点
     *
     * @return mixed
     */
    abstract public function add();

    /**
     * 展示名称
     *
     * @return mixed
     */
    abstract public function display();
}