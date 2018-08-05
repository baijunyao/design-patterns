<?php

namespace Baijunyao\DesignPatterns\AbstractFactory;

/**
 * MySQL 工厂
 *
 * Class MySQLFactory
 * @package Baijunyao\DesignPatterns\AbstractFactory
 */
class MySQLFactory implements Factory
{
    /**
     * 创建 MySQLUser 产品
     *
     * @return MySQLUser|mixed
     */
    public function createUser()
    {
        return new MySQLUser();
    }

    /**
     * 创建 MySQLArticle 产品
     *
     * @return MySQLArticle|mixed
     */
    public function createArticle()
    {
        return new MySQLArticle();
    }

}