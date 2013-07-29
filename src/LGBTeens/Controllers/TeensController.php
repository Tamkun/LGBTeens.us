<?php

namespace LGBTeens\Controllers;

use DevilFW\Session\SecureSession;
use DevilFW\Core\Request;
use DevilFW\Core\Response;
use DevilFW\Core\Controller;
use LGBTeens\View\TeensDefaultSettings;

abstract class TeensController extends Controller
{
    protected $defaults = null;

    public function __construct(Request $request, SecureSession $session)
    {
        $this->request  = $request;
        $this->session  = $session;
        $this->response = new Response();
        $this->defaults = new TeensDefaultSettings();
    }


    public function actionMissing()
    {
        try {
            $this->render('error/404');
        } catch (\Twig_Error_Loader $e) {
            $this->response->renderText("<center><h1>404 File Not Found</h1></center>");
        }
    }
}