<?php

namespace Baijunyao\DesignPatterns\AbstractFactory;

/**
 * Article 产品接口
 *
 * Interface Article
 * @package Baijunyao\DesignPatterns\AbstractFactory
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