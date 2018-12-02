<?php

namespace Baijunyao\DesignPatterns\Observer;

/**
 * 具体 Subject
 *
 * @package Baijunyao\DesignPatterns\Observer
 */
class Subject extends SubjectAbstract
{
    public function publish()
    {
        echo '我做了某事<br>';
        $this->notify();
    }
}