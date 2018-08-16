<?php

namespace Baijunyao\DesignPatterns\AbstractFactoryWithReflection;

/**
 * 适用于 SQLite 的 User
 *
 * Class SQLiteUser
 * @package Baijunyao\DesignPatterns\AbstractFactoryWithReflection
 */
class SQLiteUser implements User
{
    /**
     * 新增
     */
    public function insert()
    {
        echo '向SQLite数据库中插入 User';
    }

    /**
     * 查询
     */
    public function select()
    {
        echo '从SQLite数据库中查询 User';
    }
}