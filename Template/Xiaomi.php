<?php

namespace Baijunyao\DesignPatterns\Template;

/**
 * Class Xiaomi
 *
 * @package Baijunyao\DesignPatterns\Template
 */
class Xiaomi extends Phone
{
    /**
     * logo
     *
     * @return mixed|void
     */
    protected function showLogo()
    {
        echo '小米logo'. '<br>';
    }
}