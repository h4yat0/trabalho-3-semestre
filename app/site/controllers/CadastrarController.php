<?php

namespace app\site\controllers;

use app\core\Controller;
use app\site\models\UserModel;

class CadastrarController extends Controller
{
    public function index()
    {
        session_start();
        if (isset($_SESSION))
        {
            $model = new UserModel();
            if(empty($_SESSION['token'])) {
                $_SESSION['token'] = 'Erro session inexistente';
            } elseif ($model->isValidSession($_SESSION['token']))
            {
                header('location: ../home');
            } else {
                $this->View('cadastrar');
            }
        } else {
            $this->View('cadastrar');
        }

    }
}
