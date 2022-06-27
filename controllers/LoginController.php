<?php

namespace app\controllers;

use app\core\Application;
use app\core\Response;
use app\core\Controller;
use app\core\Request;
use app\services\LoginServices;

class LoginController extends Controller
{
    public function loginPage()
    {
        $this->render('login');
    }

    public function login(Request $request)
    {
        $body = $request->getBody();
        $loginServices = new LoginServices();

        if ($loginServices->haveAccount($body)){
            $_SERVER['PHP_AUTH_STATE'] = true;
            header("Location: http://localhost:8080/todoesVue");
        } else {
            Application::$app->response->setStatusCode(Response::HTTP_NOT_REGISTERED);
            header("Location: http://localhost:8080/login");
        }
    }
}