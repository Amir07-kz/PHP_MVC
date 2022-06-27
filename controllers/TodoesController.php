<?php

namespace app\controllers;

use app\core\Controller;

class TodoesController extends Controller
{
    public function todoesVue(){
        $this->render('todoesVue');
    }
}