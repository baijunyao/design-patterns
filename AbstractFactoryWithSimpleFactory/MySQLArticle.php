<?php

namespace Baijunyao\DesignPatterns\AbstractFactoryWithSimpleFactory;

/**
 * 应用于 MySQL 的 Article
 *
 * Class MySQLArticle
 * @package Baijunyao\DesignPatterns\AbstractFactoryWithSimpleFactory
 */
class MySQLArticle implements Article
{
    /**
     * 新增
     */
    public function insert()
    {
        echo '向 MySQL 数据库中插入 Article';
    }

    /**
     * 查询
     */
    public function select()
    {
        echo '从 MySQL 数据库中查询 Article';
    }
}