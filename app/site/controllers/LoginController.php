<?php

namespace app\site\controllers;

use app\core\Controller;

class LoginController extends Controller
{
    public function index()
    {
        session_start();
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