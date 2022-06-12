<?php

namespace app\site\controllers;

use app\core\Controller;
use app\site\models\ClientModel;
use app\site\models\PfModel;
use app\site\models\PjModel;
use app\site\models\UserModel;

class ProfileController extends Controller
{
    public function index()
    {
        session_start();
        $modelUser = new UserModel();
        $modelClient = new ClientModel();
        $modelPf = new PfModel();
        $modelPj = new PjModel();


        if (isset($_SESSION)) {
            if (empty($_SESSION['token'])) {
                $_SESSION['token'] = 'Erro session inexistente';
            } elseif ($modelUser->isValidSession($_SESSION['token'])) {
                $userInfo = $modelUser->userInfos($_SESSION['token']);
                $clientInfo = $modelClient->clientInfos($userInfo->id);

                if ($modelPf->isPf($clientInfo->codigo))
                {
                    $pfInfo = $modelPf->clientInfos($clientInfo->codigo);

                    //Descriptografa a senha
                    $passCript = base64_decode($userInfo->senha);

                    //Formata o phone
                    $phone = $this->telephone($clientInfo->telefone);

                    $this->View('profile', [
                        "pfpj" => "pf",
                        "name" => "$pfInfo->nome_completo",
                        "email" => "$userInfo->email",
                        "cpf" => "$pfInfo->cpf",
                        "rg" => "$pfInfo->rg",
                        "sex"=> "$pfInfo->sexo",
                        "dateOfBirth" => "$pfInfo->data_nascimento",
                        "password" => "$passCript",
                        "hidenPassword" => str_split("$passCript"),
                        "phoneNumber" => "$phone",
                        "cep" => "$clientInfo->cep",
                        "logedIn" => true
                    ]);

                } else {
                    $pj = $modelPj->clientInfos($clientInfo->codigo);

                    //Descriptografa a senha
                    $passCript = base64_decode($userInfo->senha);

                    //Formata o phone
                    $phone = $this->telephone($clientInfo->telefone);

                    $this->View('profile', [
                        "pfpj" => "pj",
                        "NomeDaEmpresa" => "$pj->nome_empresa",
                        "razaoSocial" => "$pj->razao_social",
                        "cnpj" => "$pj->cnpj",
                        "email" => "$userInfo->email",
                        "password" => "$passCript",
                        "hidenPassword" => str_split("$passCript"),
                        "phoneNumber" => "$phone",
                        "cep" => "$clientInfo->cep",
                        "logedIn" => true
                    ]);
                }

            } else {
                header('location: ../login');
            }
        }
    }

    public function telephone($number): string
    {
        $number = "(" . substr($number, 0, 2) . ") " . substr($number, 2, -4) . " - " . substr($number, -4);
        // primeiro substr pega apenas o DDD e coloca dentro do (), segundo subtr pega os números do 3º até faltar 4, insere o hifem, e o ultimo pega apenas o 4 ultimos digitos
        return $number;
    }

    public function save()
    {
        session_start();
        $infos = new UserModel();

        if ($infos->isValidSession($_SESSION['token'])) {
            $userInfo = $infos->userInfos($_SESSION['token']);

            if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phoneNumber']) && isset($_POST['password']) && isset($_POST['repeatPassword'])) {
                $userNewInfo = new UserModel();

                $userNewInfo->name = parent::cleanPost($_POST['name']);
                $userNewInfo->email = parent::cleanPost($_POST['email']);
                $phone = preg_replace('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', ' ', parent::cleanPost($_POST['phoneNumber']));
                $userNewInfo->phoneNumber = str_replace(' ', '', $phone);
                $userNewInfo->password = parent::cleanPost($_POST['password']);
                $userNewInfo->criptPass = base64_encode($userNewInfo->password);
                $userNewInfo->repeatPassword = parent::cleanPost($_POST['repeatPassword']);
                $userNewInfo->token = $userInfo->token;

                if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phoneNumber']) || empty($_POST['password']) || empty($_POST['repeatPassword'])) {
                    $userNewInfo->error = ['emptyError' => 'Um ou mais campos vazio'];
                } else {
                    self::editValidation($userNewInfo, $userInfo->email);
                    var_dump($userNewInfo->error);
                    if (empty($userNewInfo->error)) {
                        $userNewInfo->update();
                        header('location: ../profile');
                    }
                }
            }
        } else {
            header('location: ../login');
        }
    }

    public function delete()
    {
        session_start();
        $model = new UserModel();
        $clientModel = new ClientModel();
        $pfModel = new PfModel();
        $pjModel = new PjModel();


        if ($model->isValidSession($_SESSION['token'])) {
            $userInfos = $model->userInfos($_SESSION['token']);
            $dataClient = $clientModel->clientInfos($userInfos->id);
            $pfModel->delete($dataClient->codigo);
            $pjModel->delete($dataClient->codigo);


            $model->delete($userInfos->email, $userInfos->token);
        } else {
            header('location: ../login');
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
