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

    public static function login()
    {
        session_start();
        if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $loginModel = new UserModel();

            $loginModel->email = parent::cleanPost($_POST['email']);
            $loginModel->password = parent::cleanPost($_POST['password']);
            $loginModel->criptPass = base64_encode($loginModel->password);

            // Verifica se existe esse usuário
            if ($loginModel->isValidLogin($loginModel)) {
                // Cria um token para session
                $loginModel->token = sha1(uniqid() . date('d-m-Y-H-i-s'));
                $loginModel->updateToken();

                // Guarda token na session
                $_SESSION['token'] = $loginModel->token;

                // Colocar para ir para algum lugar
                header('location: ../home');
            } else {
                $_SESSION['email'] = $loginModel->email;
                $_SESSION['pass'] = $loginModel->password;

                header('location: ../login?error=login');
            }
        } else {
            echo "Erro no envio do post";
        }
    }
}