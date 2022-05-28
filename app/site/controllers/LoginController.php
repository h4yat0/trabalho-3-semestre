<?php

namespace app\site\controllers;

use app\core\Controller;

class LoginController extends Controller
{
    public function index()
    {
        $this->View('login');
    }
}