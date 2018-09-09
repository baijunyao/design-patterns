<?php

namespace Baijunyao\DesignPatterns\Bridge;

require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 *
 * Class Client
 * @package Baijunyao\DesignPatterns\Bridge
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $red = new Red();
        $yellow = new Yellow();
        $green = new Green();

        // 红色的正方形
        $redSquare = new Square($red);
        $redSquare->draw();
        echo '<hr>';

        // 黄色的正方形
        $yellowSquare = new Square($yellow);
        $yellowSquare->draw();
        echo '<hr>';

        // 绿色的正方形
        $greenSquare = new Square($green);
        $greenSquare->draw();
        echo '<hr>';


        // 红色的三角形
        $redTriangle = new Triangle($red);
        $redTriangle->draw();
        echo '<hr>';

        // 黄色的三角形
        $yellowTriangle = new Triangle($yellow);
        $yellowTriangle->draw();
        echo '<hr>';

        // 绿色的三角形
        $greenTriangle = new Triangle($green);
        $greenTriangle->draw();
        echo '<hr>';


        // 红色的圆形
        $redCircle = new Circle($red);
        $redCircle->draw();
        echo '<hr>';

        // 黄色的圆形
        $yellowCircle = new Circle($yellow);
        $yellowCircle->draw();
        echo '<hr>';

        // 绿色的圆形
        $greenCircle = new Circle($green);
        $greenCircle->draw();
        echo '<hr>';

    }
}

$client = new Client();
$client->run();