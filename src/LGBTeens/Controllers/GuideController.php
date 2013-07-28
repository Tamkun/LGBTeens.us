<?php

namespace LGBTeens\Controllers;

class GuideController extends TeensController
{
    public function indexAction()
    {
        $this->request->render('guide/index', $this->defaults);
    }
}