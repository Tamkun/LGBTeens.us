<?php

namespace LGBTeens\Controllers;

use Devil\HTTP\SecureSession;
use Devil\MVC\Controller;
use Devil\MVC\Request;
use LGBTeens\View\TeensRenderSettings;

abstract class TeensController extends Controller
{
    protected $defaults = null;

    public function __construct(Request $request, SecureSession $session)
    {
        $this->request  = $request;
        $this->session  = $session;
        $this->defaults = new TeensRenderSettings();
    }


    public function actionMissing()
    {
        try {
            $this->request->render('error/404', $this->defaults);
        } catch (\Twig_Error_Loader $e) {
            $this->request->renderText("<center><h1>404 File Not Found</h1></center>");
        }
    }
}