<?php

namespace Baijunyao\DesignPatterns\AbstractFactory;

/**
 * SQLite 工厂
 *
 * Class SQLiteFactory
 * @package Baijunyao\DesignPatterns\AbstractFactory
 */
class SQLiteFactory implements Factory
{
    /**
     * 创建 SQLiteUser 产品
     *
     * @return SQLiteUser|mixed
     */
    public function createUser()
    {
        return new SQLiteUser();
    }

    /**
     * 创建 SQLiteArticle 产品
     *
     * @return SQLiteArticle|mixed
     */
    public function createArticle()
    {
        return new SQLiteArticle();
    }
}