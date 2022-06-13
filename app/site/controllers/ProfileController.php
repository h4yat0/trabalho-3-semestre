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
        $modelUser = new UserModel();
        $modelClient = new ClientModel();
        $modelPf = new PfModel();
        $modelPj = new PjModel();

        if ($modelUser->isValidSession($_SESSION['token'])) {
            $userInfo = $modelUser->userInfos($_SESSION['token']);
            $clientInfo = $modelClient->clientInfos($userInfo->id);

            $modelUser->email = parent::cleanPost($_POST['email']);
            $modelUser->password = parent::cleanPost($_POST['password']);
            $modelUser->criptPass = base64_encode($modelUser->password);
            $modelUser->repeatPassword = parent::cleanPost($_POST['repeatPassword']);
            $modelClient->cep = parent::cleanPost($_POST['cep']);
            $modelClient->phoneNumber = preg_replace('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', ' ', parent::cleanPost($_POST['phoneNumber']));
            $modelUser->token = $userInfo->token;

            $modelUser->update();
            $modelClient->update($userInfo->id);

            if ($modelPf->isPf($clientInfo->codigo)) {
                $modelPf->cpf = preg_replace('/[^0-9]/', '', parent::cleanPost($_POST['cpf']));
                $modelPf->name = parent::cleanPost($_POST['name']);
                $modelPf->gender = parent::cleanPost($_POST['sex']);
                $modelPf->rg = preg_replace('/[^0-9]/', '', parent::cleanPost($_POST['rg']));
                $modelPf->birthday = parent::cleanPost($_POST['dateOfBirth']);

                $modelPf->update($clientInfo->codigo);
            } else if (!$modelPf->isPf($clientInfo->codigo)){
                $modelPj->socialReason = parent::cleanPost($_POST['razaoSocial']);
                $modelPj->companyName = parent::cleanPost($_POST['NomeDaEmpresa']);
                $modelPj->cnpj = preg_replace('/[^0-9]/', '', parent::cleanPost($_POST['cnpj']));

                $modelPj->update($clientInfo->codigo);
            }

            // Valida se não tem nenhum campo comum vazio
            if (empty($_POST['email']) || empty($_POST['cep']) || empty($_POST['phoneNumber']) || empty($_POST['password']) || empty($_POST['repeatPassword'])) {
                $modelUser->error = ['emptyError' => 'Um ou mais campos vazio'];
            } else {

                self::editValidation($modelUser, $modelClient, $modelPf, $modelPj, $modelUser->email, $modelPf->rg, $modelPf->cpf, $modelPj->cnpj);
                if (empty($modelUser->error) && empty($modelClient->error)) {
                    $modelClient->update($userInfo->id);
                    $modelUser->update();
                } else {
                    var_dump($modelClient->error);
                    var_dump($modelUser->error);
                }
            }

            // Verifica se pf ta vazio
            if (empty($_POST['name']) || empty($_POST['cpf']) || empty($_POST['rg']) || empty($_POST['sex']) || empty($_POST['dateOfBirth'])) {
                $modelPf->error = ['emptyError' => 'Um ou mais campos vazio'];
            } else {
                self::editValidation($modelUser, $modelClient, $modelPf, $modelPj, $modelUser->email, $modelPf->rg, $modelPf->cpf, $modelPj->cnpj);
                if (empty($modelPf->error)) {
                    $modelPf->update($clientInfo->codigo);
                } else {
                    var_dump($modelPf->error);
                }
            }

            // Verifica se pj está vazio
            if (empty($_POST['NomeDaEmpresa']) || empty($_POST['razaoSocial']) || empty($_POST['cnpj'])) {
                $modelPj->error = ['emptyError' => 'Um ou mais campos vazio'];
            } else {
                self::editValidation($modelUser, $modelClient, $modelPf, $modelPj, $modelUser->email, $modelPf->rg, $modelPf->cpf, $modelPj->cnpj);
                if (empty($modelPj->error)) {
                    $modelPj->update($clientInfo->codigo);
                } else {
                    var_dump($modelPj->error);
                }
            }

            header('location: ../profile');
        } else header('location: ../login');
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
            header('location: ../login');
        } else {
            header('location: ../login');
        }
    }

    private static function editValidation(UserModel $userModel, ClientModel $clientModel, PfModel $pfModel, PjModel $pjModel, string $email, string $rg, string $cpf, string $cnpj): void
    {

        //Valida nome
        if (!preg_match("/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ'\s]+$/", $pfModel->name)) {
            $pfModel->error = ['nameError' => 'Nome inválido'];
        }

        //Valida email
        if (!filter_var($userModel->email, FILTER_VALIDATE_EMAIL)) {
            $userModel->error = ['emailError' => 'Email inválido'];
        }

        //Valida telefone
        if (!is_numeric($clientModel->phoneNumber)) {
            $clientModel->error = ['phoneError' => 'Telefone inválido'];
        }

        //Valida se senha tem mais que 6 dígitos
        if (strlen($userModel->password) < 6) {
            $userModel->error = ['passError' => 'Tamanho mínimo de senha não atingido'];
        }

        //Verifica se o email está sendo usado por outra conta
        if ($userModel->isRepeatedEmail($userModel->email) && $userModel->email !== $email) {
            $userModel->error = ['usedEmailError' => 'Email não disponível'];
        }

        // Verifica se o cpf já foi utilizado
        if ($pfModel->isRepeatedCpf($pfModel->cpf) && $pfModel->cpf !== $cpf)
        {
            $pfModel->error = ['usedCpfError' => 'Cpf não disponível'];
        }

        // Verifica se o rg já foi utilizado
        if ($pfModel->isRepeatedRg($pfModel->rg) && $pfModel->rg !== $rg)
        {
            $pfModel->error = ['usedRgError' => 'RG não disponível'];
        }

        // Verifica se o cnpj já foi utilizado
        if ($pjModel->isRepeatedCnpj($pjModel->cnpj) && $pjModel->cnpj !== $cnpj)
        {
            $pjModel->error = ['usedCnpjError' => 'CNPJ não disponível'];
        }

        //Valida se senhas são iguais
        if ($userModel->password !== $userModel->repeatPassword) {
            $userModel->error = ['repeatPassError' => 'Senhas diferentes'];
        }
    }
}
