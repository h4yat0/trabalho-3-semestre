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

        $userInfo = $model->userInfos('48436c03b364f7a422a3c747b66e525c570fff74');

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

    public function edit()
    {
        $model = new UserModel();

        $userInfo = $model->userInfos('48436c03b364f7a422a3c747b66e525c570fff74');


    }
}