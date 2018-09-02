<?php

namespace Baijunyao\DesignPatterns\AbstractFactory;

require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 *
 * Class Client
 * @package Baijunyao\DesignPatterns\AbstractFactory
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        // 使用 MySQL
        $factory = new MySQLFactory();
        // 创建 user
        $user = $factory->createUser();
        $user->insert();
        echo '<br>';
        $user->select();

        echo '<hr>';

        $factory = new MySQLFactory();
        // 创建 article
        $article = $factory->createArticle();
        $article->insert();
        echo '<br>';
        $article->select();

        echo '<br><br>';

        // 使用 SQLite
        $factory = new SQLiteFactory();
        // 创建 user
        $user = $factory->createUser();
        $user->insert();
        echo '<br>';
        $user->select();

        echo '<hr>';

        $factory = new SQLiteFactory();
        // 创建 article
        $article = $factory->createArticle();
        $article->insert();
        echo '<br>';
        $article->select();
    }
}

$client = new Client();
$client->run();