<?php

namespace app\site\controllers;

use app\core\Controller;
use app\site\models\ClientModel;
use app\site\models\PfModel;
use app\site\models\PjModel;
use app\site\models\UserModel;

class CadastrarController extends Controller
{

    public function index()
    {
        session_start();
        if (isset($_SESSION))
        {
            $model = new UserModel();
            if(empty($_SESSION['token'])) {
                $_SESSION['token'] = 'Erro session inexistente';
            } elseif ($model->isValidSession($_SESSION['token']))
            {
                header('location: ../home');
            } else {
                $this->View('cadastrar');
            }
        } else {
            $this->View('cadastrar');
        }

    }

    public static function save()
    {
        session_start();
        // Verifica se existe um post dos campos que se repetem independente da "pessoa"
        if (isset($_POST['email']) && isset($_POST['cep']) && isset($_POST['phoneNumber']) && isset($_POST['password']) && isset($_POST['repeatPassword']) && isset($_POST['pessoa'])) {

            // Campos que todos os tipos de pessoas usam
            $modelClient = new ClientModel();
            $modelUser = new UserModel();

            $modelUser->email = parent::cleanPost($_POST['email']);
            $modelClient->phoneNumber = str_replace(' ', '', parent::cleanPost($_POST['phoneNumber']));
            $modelUser->password = parent::cleanPost($_POST['password']);
            $modelClient->cep = preg_replace('/[^0-9]/', '', parent::cleanPost($_POST['cep']));
            $modelUser->criptPass = base64_encode($modelUser->password);
            $modelUser->repeatPassword = parent::cleanPost($_POST['repeatPassword']);
            date_default_timezone_set('America/Sao_Paulo');
            $modelClient->setRegisterDate(date('d/m/Y'));

            // Valida se não tem nenhum campo vazio
            if (empty($_POST['email']) || empty($_POST['cep']) || empty($_POST['phoneNumber']) || empty($_POST['password']) || empty($_POST['repeatPassword'])) {
                $modelUser->error = ['emptyError' => 'Um ou mais campos vazio'];
            } else {

                self::userValidation($modelUser);
                if (empty($modelUser->error)) {
                    $modelUser->setIdUser($modelUser->save());
                    $modelClient->setIdClient($modelClient->save($modelUser->getIdUser()));
                }
            }


            if ($_POST['pessoa'] === 'pf')
            {
                $modelPf = new PfModel();
                $modelPf->name = parent::cleanPost($_POST['name']);
                $modelPf->cpf = preg_replace('/[^0-9]/', '', parent::cleanPost($_POST['cpf']));
                $modelPf->rg = preg_replace('/[^0-9]/', '', parent::cleanPost($_POST['rg']));
                $modelPf->gender = parent::cleanPost($_POST['sex']);
                $modelPf->birthday = parent::cleanPost($_POST['dateOfBirth']);

                if (empty($_POST['name']) || empty($_POST['cpf']) || empty($_POST['rg']) || empty($_POST['sex']) || empty($_POST['dateOfBirth'])) {
                    $modelPf->error = ['emptyError' => 'Um ou mais campos vazio'];
                } else {

                    self::pfValidation($modelPf);
                    if (empty($model->error)) {
                        $modelPf->save($modelClient->getIdClient());
                    }
                }

            }

            if ($_POST['pessoa'] === 'pj')
            {
                $modelPj = new PjModel();

                $modelPj->companyName = parent::cleanPost($_POST['NomeDaEmpresa']);
                $modelPj->socialReason = parent::cleanPost($_POST['razaoSocial']);
                $modelPj->cnpj = preg_replace('/[^0-9]/', '', parent::cleanPost($_POST['cnpj']));

                if (empty($_POST['NomeDaEmpresa']) || empty($_POST['razaoSocial']) || empty($_POST['cnpj'])) {
                    $modelPj->error = ['emptyError' => 'Um ou mais campos vazio'];
                } else {

                    self::pjValidation($modelPj);
                    if (empty($model->error)) {
                        $modelPj->save($modelClient->getIdClient());
                    }
                }
            }

            // Colocar para ir para algum lugar
            header('location: ../login');
        } else {
            echo "Erro no envio do post!";
        }
    }


    private static function pfValidation(PfModel $pfModel)
    {
        //Valida nome
        if (!preg_match("/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ'\s]+$/", $pfModel->name)) {
            $pfModel->error = ['nameError' => 'Nome inválido'];
        }

        //Valida se cpf tem 11 digitos
        if (strlen($pfModel->cpf) !== 11) {
            $pfModel->error = ['cpfError' => 'Tamanho de cpf inválido'];
        }

        //Valida se rg possui 9 digitos
        if (strlen($pfModel->rg) !== 9) {
            $pfModel->error = ['rgError' => 'Tamanho de rg inválido'];
        }
    }

    private static function pjValidation(PjModel $pjModel)
    {
        // Valida se o cnpj tem 14 digitos
        if (strlen($pjModel->cnpj) !== 14) {
            $pjModel->error = ['cnpjError' => 'Tamanho inválido'];
        }
    }

    private static function userValidation(UserModel $model): void
    {

        //Valida email
        if (!filter_var($model->email, FILTER_VALIDATE_EMAIL)) {
            $model->error = ['emailError' => 'Email inválido'];
        }

        //Valida se senha tem mais que 6 dígitos
        if (strlen($model->password) < 6) {
            $model->error = ['passError' => 'Tamanho mínimo de senha não atingido'];
        }

        //Valida se senhas são iguais
        if ($model->password !== $model->repeatPassword) {
            $model->error = ['repeatPassError' => 'Senhas diferentes'];
        }

        if ($model->isRepeatedEmail($model->email)) {
            $model->error = ['repeatedEmailError' => 'Email já cadastrado'];
        }
    }
}
