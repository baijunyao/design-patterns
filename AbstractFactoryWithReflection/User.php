<?php

namespace Baijunyao\DesignPatterns\AbstractFactoryWithReflection;

/**
 * User 产品接口
 *
 * Interface User
 * @package Baijunyao\DesignPatterns\AbstractFactoryWithReflection
 */
interface User
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