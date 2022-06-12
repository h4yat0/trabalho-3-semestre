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
        $model1 = new UserModel();
        $model2 = new ClientModel();
        $model3 = new PjModel();

        $model1->email = 'teste@teste.com';
        $model1->criptPass = '12345678';

        $model1->setIdUser($model1->save());
        $num = $model1->getIdUser();

        $model2->cep = 'aaaa';
        $model2->registerDate = 'aaaa';
        $model2->phoneNumber = '1234561111';

        $model3->companyName = 'aaaa';
        $model3->socialReason = 'aaaa';
        $model3->cnpj = '1234561111';

        $idCliente = $model2->save($num);
        $model2->setIdClient($idCliente);

        $model3->save($model2->getIdClient());
        var_dump($model2->getIdClient());
    }
}
