<?php

namespace app\site\controllers;

use app\core\Controller;

class CadastrarController extends Controller
{
    public function index()
    {
        $this->View('cadastrar');
    }
}
