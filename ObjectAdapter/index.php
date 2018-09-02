<?php

namespace Baijunyao\DesignPatterns\ObjectAdapter;

require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 *
 * Class Client
 * @package Baijunyao\DesignPatterns\ObjectAdapter
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
        $adapter = new Adapter($adaptee);
        $adapter->pay();
        echo '<br>';

        $adapter->notify();
    }
}

$client = new Client();
$client->run();