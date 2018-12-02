<?php

namespace Baijunyao\DesignPatterns\Observer;

require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 *
 * Class Client
 * @package Baijunyao\DesignPatterns\Observer
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $emailObserver = new EmailObserver();
        $SMSObserver = new SMSObserver();
        $subject = new Subject();

        $subject->attach($emailObserver);
        $subject->attach($SMSObserver);
        $subject->publish();
    }
}

$client = new Client();
$client->run();