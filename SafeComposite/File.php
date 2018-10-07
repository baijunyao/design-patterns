<?php

namespace Baijunyao\DesignPatterns\SafeComposite;

/**
 * 文件
 *
 * Class File
 * @package Baijunyao\DesignPatterns\SafeComposite
 */
class File extends Component
{
    /**
     * @return mixed|string
     */
    public function display()
    {
        return '--' . $this->name .'<br>';
    }
}