<?php

namespace Baijunyao\DesignPatterns\Facade;

/**
 * Facade
 *
 * @package Baijunyao\DesignPatterns\Facade
 */
class Facade
{
    /**
     * @var \Baijunyao\DesignPatterns\Facade\File
     */
    private $file;

    /**
     * @var \Baijunyao\DesignPatterns\Facade\Encrypt
     */
    private $encrypt;

    /**
     * Facade constructor.
     */
    public function __construct()
    {
        $this->file = new File();
        $this->encrypt = new Encrypt();
    }

    /**
     * 获取文件内容并加密
     */
    public function encryptContent()
    {
        echo $this->file->content();
        echo '<br>';
        echo $this->encrypt->encrypt();
    }
}
