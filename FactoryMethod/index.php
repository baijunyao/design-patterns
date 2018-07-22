<?php

namespace Baijunyao\DesignPatterns\FactoryMethod;

require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 *
 * Class Client
 * @package Baijunyao\DesignPatterns\FactoryMethod
 */
class Client
{
    /**
     * 不好的示例   直接 new 具体的产品
     */
    public function bad()
    {
        // 计算 1+2
        $operation = new Add();
        $operation->setNumberA(1);
        $operation->setNumberB(2);
        $result = $operation->getResult();
        echo $result;

        echo '<br>';

        // 计算 3+4
        $operation = new Add();
        $operation->setNumberA(3);
        $operation->setNumberB(4);
        $result = $operation->getResult();
        echo $result;
    }

    /**
     * 好的示例  new 产品对应的工厂
     */
    public function good()
    {
        $factory = new AddFactory();
        $operation = $factory->create();
        $operation->setNumberA(1);
        $operation->setNumberB(2);
        $result = $operation->getResult();
        echo $result;
    }
}


$client = new Client();
$client->bad();
echo '<br>';
$client->good();