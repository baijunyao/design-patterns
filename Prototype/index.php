<?php

namespace Baijunyao\DesignPatterns\Prototype;

require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 *
 * Class Client
 * @package Baijunyao\DesignPatterns\Prototype
 */
class Client
{
    /**
     * 浅复制
     */
    public function shallowCopy()
    {
        $car = new Car();
        $car->name = '特斯拉';

        $shallowDrive = new ShallowDrive();
        $shallowDrive->setCar($car);
        $shallowDrive->show();

        $cloneDrive = clone $shallowDrive;
        $cloneDrive->show();

        echo '<hr>';

        $car->name = '凯迪拉克';
        $shallowDrive->show();
        $cloneDrive->show();
    }

    /**
     *
     */
    public function deepCopy()
    {
        $car = new Car();
        $car->name = '特斯拉';

        $deepDrive = new DeepDrive();
        $deepDrive->setCar($car);
        $deepDrive->show();

        $cloneDrive = clone $deepDrive;
        $cloneDrive->show();

        echo '<hr>';

        $car->name = '凯迪拉克';
        $deepDrive->show();
        $cloneDrive->show();
    }
}

$client = new Client();
$client->shallowCopy();
echo '<br>-----------------------------<br>';
$client->deepCopy();