<?php

namespace LGBTeens\Controllers;

class IndexController extends TeensController
{
    public function indexAction()
    {
        $this->request->render('index', $this->defaults);
    }
}