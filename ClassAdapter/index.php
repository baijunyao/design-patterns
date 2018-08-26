<?php

namespace Baijunyao\DesignPatterns\ClassAdapter;

require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 *
 * Class Client
 * @package Baijunyao\DesignPatterns\ClassAdapter
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        // 原本的类的
        $adaptee = new Adaptee();
        $adaptee->pay();
        echo '<br>';

        // 适配器
        $adapter = new Adapter();
        $adapter->pay();
        echo '<br>';

        $adapter->notify();
    }
}

$client = new Client();
$client->run();