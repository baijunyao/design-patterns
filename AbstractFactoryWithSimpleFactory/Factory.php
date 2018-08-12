<?php

namespace Baijunyao\DesignPatterns\AbstractFactoryWithSimpleFactory;

class Factory
{
    public $db = 'MySQL';

    /**
     * Factory constructor.
     */
    public function __construct()
    {
        /**
         * 从配置项中获取 driver
         */
        $config = include 'config.php';
        $this->db = $config['driver'];
    }

    /**
     * 创建 User 产品
     *
     * @return MySQLUser|SQLiteUser
     */
    public function createUser()
    {
        switch ($this->db) {
            case 'MySQL':
                $user =  new MySQLUser();
                break;
            case 'SQLite':
                $user =  new SQLiteUser();
                break;
            default:
                throw new \InvalidArgumentException('暂不支持的数据库类型');
        }
        return $user;
    }

    /**
     * 创建 Article 产品
     *
     * @return MySQLArticle|SQLiteArticle
     */
    public function createArticle()
    {
        switch ($this->db) {
            case 'MySQL':
                $article =  new MySQLArticle();
                break;
            case 'SQLite':
                $article =  new SQLiteArticle();
                break;
            default:
                throw new \InvalidArgumentException('暂不支持的数据库类型');
        }
        return $article;
    }
}