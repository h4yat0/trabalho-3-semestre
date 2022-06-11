<?php

namespace app\site\controllers;

use app\core\Controller;
use app\site\models\UserModel;

class UserController extends Controller
{
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

    public static function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('location: ../login');
    }


}
