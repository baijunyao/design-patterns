<?php

namespace Baijunyao\DesignPatterns\AbstractFactory;

/**
 * 工厂接口
 *
 * Interface Factory
 * @package Baijunyao\DesignPatterns\AbstractFactory
 */
interface Factory
{
    /**
     * 创建 User 产品
     *
     * @return mixed
     */
    public function createUser();

    /**
     * 创建 Article 产品
     *
     * @return mixed
     */
    public function createArticle();
}