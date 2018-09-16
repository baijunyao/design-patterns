<?php

namespace Baijunyao\DesignPatterns\Decorator;

require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 *
 * Class Client
 * @package Baijunyao\DesignPatterns\Decorator
 */
class Client
{
    /**
     *
     */
    public function run()
    {
        // 手抓饼
        $shouzhuabing = new Shouzhuabing();
        echo $shouzhuabing->name();
        echo $shouzhuabing->price() . '元';
        echo '<hr>';

        // 烤冷面
        $kaolengmian = new Kaolengmian();
        echo $kaolengmian->name();
        echo $kaolengmian->price() . '元';
        echo '<hr>';

        // 手抓饼+蛋
        $egg = new Egg($shouzhuabing);
        echo $egg->name();
        echo $egg->price() . '元';
        echo '<hr>';

        // 手抓饼+肠
        $sausage = new Sausage($kaolengmian);
        echo $sausage->name();
        echo $sausage->price() . '元';
        echo '<hr>';

        // 烤冷面+辣条
        $latiao = new Latiao($shouzhuabing);
        echo $latiao->name();
        echo $latiao->price() . '元';
        echo '<hr>';
    }
}

$client = new Client();
$client->run();
