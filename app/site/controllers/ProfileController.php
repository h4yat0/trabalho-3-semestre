<?php

namespace app\site\controllers;

use app\core\Controller;
use app\site\models\UserModel;

class ProfileController extends Controller
{
    public function index()
    {
        session_start();
        $model = new UserModel();

        if (isset($_SESSION))
        {
            if(empty($_SESSION['token'])) {
                $_SESSION['token'] = 'Erro session inexistente';
            } elseif ($model->isValidSession($_SESSION['token']))
            {
                $userInfo = $model->userInfos($_SESSION['token']);

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
            } else {
                header('location: login');
            }
        }
    }

    public function telephone($number){
        $number="(".substr($number,0,2).") ".substr($number,2,-4)." - ".substr($number,-4);
        // primeiro substr pega apenas o DDD e coloca dentro do (), segundo subtr pega os números do 3º até faltar 4, insere o hifem, e o ultimo pega apenas o 4 ultimos digitos
        return $number;
    }

    public function save()
    {
        $infos = new UserModel();

        $userInfo = $infos->userInfos('6f94487da8362a5dbeb71e1b3c05de48944e28fd');

        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phoneNumber']) && isset($_POST['password']) && isset($_POST['repeatPassword']))
        {
            $userNewInfo = new UserModel();

            $userNewInfo->name = parent::cleanPost($_POST['name']);
            $userNewInfo->email = parent::cleanPost($_POST['email']);
            $phone = preg_replace('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/',' ' , parent::cleanPost($_POST['phoneNumber']));
            $userNewInfo->phoneNumber = str_replace(' ', '', $phone);
            $userNewInfo->password = parent::cleanPost($_POST['password']);
            $userNewInfo->criptPass = base64_encode($userNewInfo->password);
            $userNewInfo->repeatPassword = parent::cleanPost($_POST['repeatPassword']);
            $userNewInfo->token = $userInfo->token;

            if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phoneNumber']) || empty($_POST['password']) || empty($_POST['repeatPassword']))
            {
                $userNewInfo->error = ['emptyError' => 'Um ou mais campos vazio'];
            } else
            {
                self::editValidation($userNewInfo, $userInfo->email);
                var_dump($userNewInfo->error);
                if (empty($userNewInfo->error)) {
                    $userNewInfo->update();
                    header('location: ../profile');
                }
            }
        }
    }

    private static function editValidation(UserModel $model, string $email): void
    {

        //Valida nome
        if (!preg_match("/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ'\s]+$/", $model->name)) {
            $model->error = ['nameError' => 'Nome inválido'];
        }

        //Valida email
        if (!filter_var($model->email, FILTER_VALIDATE_EMAIL)) {
            $model->error = ['emailError' => 'Email inválido'];
        }

        //Valida telefone
        if (!is_numeric($model->phoneNumber)) {
            $model->error = ['phoneError' => 'Telefone inválido'];
        }

        //Valida se senha tem mais que 6 dígitos
        if (strlen($model->password) < 6) {
            $model->error = ['passError' => 'Tamanho mínimo de senha não atingido'];
        }

        //Verifica se o email está sendo usado por outra conta
        if ($model->isRepeatedEmail($model->email) && $model->email !== $email) {
            $model->error = ['usedEmailError' => 'Email não disponível'];
        }

        //Valida se senhas são iguais
        if ($model->password !== $model->repeatPassword) {
            $model->error = ['repeatPassError' => 'Senhas diferentes'];
        }
    }
}