<?php

namespace Baijunyao\DesignPatterns\Proxy;

require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 *
 * Class Client
 * @package Baijunyao\DesignPatterns\Proxy
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $proxy = new Proxy();
        $proxy->action();
    }
}

$client = new Client();
$client->run();