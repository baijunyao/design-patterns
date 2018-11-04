<?php

namespace Baijunyao\DesignPatterns\Template;

require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 *
 * Class Client
 * @package Baijunyao\DesignPatterns\Template
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $xiaomi = new Xiaomi();
        $xiaomi->action();

        echo '<hr>';

        $huawei = new Huawei();
        $huawei->action();
    }
}

$client = new Client();
$client->run();