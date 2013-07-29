<?php

namespace LGBTeens\Controllers;

class GuideController extends TeensController
{
    public function indexAction()
    {
        $this->render('guide/index');
    }
}