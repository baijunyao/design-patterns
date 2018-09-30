<?php

namespace Baijunyao\DesignPatterns\TransparentComposite;

require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 *
 * Class Client
 * @package Baijunyao\DesignPatterns\TransparentComposite
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
        $transparentComposite = new Dir('TransparentComposite');

        $designPatterns->add($classAdapter);
        $designPatterns->add($objectAdapter);
        $designPatterns->add($transparentComposite);

        $componentFile = new File('Component.php');
        $dirFile = new File('Dir.php');
        $fileFile = new File('File.php');
        $indexFile = new File('index.php');

        $transparentComposite->add($componentFile);
        $transparentComposite->add($dirFile);
        $transparentComposite->add($fileFile);
        $transparentComposite->add($indexFile);

        echo $designPatterns->display();
    }
}

$client = new Client();
$client->run();
