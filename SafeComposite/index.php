<?php

namespace Baijunyao\DesignPatterns\SafeComposite;

require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 *
 * Class Client
 * @package Baijunyao\DesignPatterns\SafeComposite
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $designPatterns = new Dir('design-patterns');

        $classAdapter = new Dir('ClassAdapter');
        $objectAdapter = new Dir('ObjectAdapter');
        $safeComposite = new Dir('SafeComposite');

        $designPatterns->add($classAdapter);
        $designPatterns->add($objectAdapter);
        $designPatterns->add($safeComposite);

        $componentFile = new File('Component.php');
        $dirFile = new File('Dir.php');
        $fileFile = new File('File.php');
        $indexFile = new File('index.php');

        $safeComposite->add($componentFile);
        $safeComposite->add($dirFile);
        $safeComposite->add($fileFile);
        $safeComposite->add($indexFile);

        echo $designPatterns->display();
    }
}

$client = new Client();
$client->run();
