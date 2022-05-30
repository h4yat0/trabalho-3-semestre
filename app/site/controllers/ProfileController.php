<?php

namespace app\site\controllers;

use app\core\Controller;
use app\site\DAO\UserDAO;
use app\site\models\UserModel;

class ProfileController extends Controller
{
    public function index()
    {
        $model = new UserModel();

        $userInfo = $model->userInfos('6f94487da8362a5dbeb71e1b3c05de48944e28fd');

        //Descriptografa a senha
        $passCript = base64_decode($userInfo->senha);

        //Formata o phone
        $phone = $this->telephone($userInfo->telefone);

        $this->View('profile', [
            "name" =>  "$userInfo->nome",
            "email" => "$userInfo->email",
            "phoneNumber" => "$phone",
            "password" => "$passCript"
        ]);
    }

    public function telephone($number){
        $number="(".substr($number,0,2).") ".substr($number,2,-4)." - ".substr($number,-4);
        // primeiro substr pega apenas o DDD e coloca dentro do (), segundo subtr pega os números do 3º até faltar 4, insere o hifem, e o ultimo pega apenas o 4 ultimos digitos
        return $number;
    }
}