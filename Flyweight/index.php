<?php

namespace Baijunyao\DesignPatterns\Flyweight;

require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 *
 * Class Client
 * @package Baijunyao\DesignPatterns\Flyweight
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $flyweight = new FlyweightFactory();
        $zhangsan1 = $flyweight->getFlyweight('170cm的模特');
        $zhangsan1->show('第1件L号的衣服');

        $zhangsan2 = $flyweight->getFlyweight('170cm的模特');
        $zhangsan2->show('第99件L号的衣服');

        var_dump($zhangsan1 === $zhangsan2);
        echo '<hr>';

        $lisi = $flyweight->getFlyweight('180cm的模特');
        $lisi->show('第1件XXL号的衣服');

        $wangmazi = new UnsharedConcreteFlyweight('190cm的模特');
        $wangmazi->show('第1件XXXL号的衣服');
        $wangmazi->delete();
        $wangmazi->show('第1件XXXL号的衣服');
    }
}

$client = new Client();
$client->run();