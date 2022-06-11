<?php

namespace app\site\controllers;

use app\core\Controller;
use app\site\models\UserModel;

class HomeController extends Controller
{

    public function __construct()
    {
    }
    public function index()
    {
        session_start();
        $model = new UserModel();
        if (isset($_SESSION))
        {
            if(empty($_SESSION['token'])) {
                $_SESSION['token'] = 'Erro session inexistente';
            } elseif ($model->isValidSession($_SESSION['token'])) {
                $this->View('home', [
                    'BASE' => BASE,
                    'logedIn' => true
                ]);
            } else {
                $this->View('home', [
                    'BASE' => BASE
                ]);
            }

        } else {
            $this->View('home', [
                'BASE' => BASE
            ]);
        }

    }
}
