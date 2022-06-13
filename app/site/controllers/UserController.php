<?php

namespace app\site\controllers;

use app\core\Controller;
use app\site\models\ClientModel;
use app\site\models\PfModel;
use app\site\models\PjModel;
use app\site\models\UserModel;

class UserController extends Controller
{
    public static function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('location: ../login');
    }

    public function teste()
    {
       parent::View('cadastrar', [
           'cpfUsed' => true
       ]);
    }
}
