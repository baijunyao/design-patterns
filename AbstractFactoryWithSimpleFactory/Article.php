<?php

namespace Baijunyao\DesignPatterns\AbstractFactoryWithSimpleFactory;

/**
 * Article 产品接口
 *
 * Interface Article
 * @package Baijunyao\DesignPatterns\AbstractFactoryWithSimpleFactory
 */
interface Article
{
    /**
     * 新增
     *
     * @return mixed
     */
    public function insert();

    /**
     * 查询
     *
     * @return mixed
     */
    public function select();
}