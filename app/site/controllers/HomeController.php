<?php

namespace app\site\controllers;

use app\core\Controller;

class HomeController extends Controller
{

    public function __construct()
    {
    }
    public function index()
    {
        $this->View('home');
    }
}
