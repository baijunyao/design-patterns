<?php

namespace Baijunyao\DesignPatterns\Template;

/**
 * Class Huawei
 *
 * @package Baijunyao\DesignPatterns\Template
 */
class Huawei extends Phone
{
    /**
     * 打电话
     *
     * @return mixed|void
     */
    protected function showLogo()
    {
        echo '华为logo'. '<br>';
    }
}