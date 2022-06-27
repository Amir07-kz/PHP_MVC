<?php

namespace app\controllers;

use app\core\Controller;

class WelcomeController extends Controller
{
    public function welcomePage()
    {
        $this->render('welcome');
    }
}