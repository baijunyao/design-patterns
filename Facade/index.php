<?php

namespace Baijunyao\DesignPatterns\Facade;

require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 *
 * Class Client
 * @package Baijunyao\DesignPatterns\Facade
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $facade = new Facade();
        $facade->encryptContent();
    }
}

$client = new Client();
$client->run();