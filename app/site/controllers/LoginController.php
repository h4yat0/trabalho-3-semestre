<?php

namespace app\site\controllers;

use app\core\Controller;
use app\site\models\UserModel;

class LoginController extends Controller
{
    public function index()
    {
        session_start();
        if (isset($_SESSION)) {
            $model = new UserModel();
            if (empty($_SESSION['token'])) {
                $_SESSION['token'] = 'Erro session inexistente';
            } elseif ($model->isValidSession($_SESSION['token']))
            {
                header('location: ../home');
            } else
            {
                if (isset($_GET['error'])) {
                    $email = $_SESSION['email'];
                    $password = $_SESSION['pass'];
                    $this->View('login', [
                            'visibility' => '',
                            'email' => "$email",
                            'password' => "$password"
                        ]
                    );
                } else {
                    $this->View('login', [
                            'visibility' => 'oculto'
                        ]
                    );
                }
            }
        } else {
            if (isset($_GET['error'])) {
                $email = $_SESSION['email'];
                $password = $_SESSION['pass'];
                $this->View('login', [
                        'visibility' => '',
                        'email' => "$email",
                        'password' => "$password"
                    ]
                );
            } else {
                $this->View('login', [
                        'visibility' => 'oculto'
                    ]
                );
            }
        }
    }
}