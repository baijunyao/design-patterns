<?php

namespace Baijunyao\DesignPatterns\TransparentComposite;

/**
 * 文件
 *
 * Class File
 * @package Baijunyao\DesignPatterns\TransparentComposite
 */
class File extends Component
{
    /**
     * @param Component $component
     * @throws \Exception
     */
    public function add(Component $component)
    {
        throw new \Exception('文件不能添加子节点');
    }

    /**
     * @return mixed|string
     */
    public function display()
    {
        return '--' . $this->name .'<br>';
    }
}