<?php
namespace app\site\controllers;
use app\core\Controller;
use app\site\models\UserModel;

class UserController extends Controller {

    public static function save() {

        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phoneNumber']) && isset($_POST['password']) && isset($_POST['repeatPassword'])) {
            $model = new UserModel();

            $model->name = parent::cleanPost($_POST['name']);
            $model->email = parent::cleanPost($_POST['email']);
            $model->phoneNumber = parent::cleanPost($_POST['phoneNumber']);
            $model->password = parent::cleanPost($_POST['password']);
            $model->criptPass = sha1($model->password);
            $model->repeatPassword = parent::cleanPost($_POST['repeatPassword']);
            date_default_timezone_set('America/Sao_Paulo');
            $model->setRegisterDate(date('d/m/Y'));

            // Valida se não tem nenhum campo vazio
            if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phoneNumber']) || empty($_POST['password']) || empty($_POST['repeatPassword'])) {
                $model->error = ['emptyError' => 'Um ou mais campos vazio'];
            } else {

                self::registerValidation($model);
                if (empty($model->error)) {
                    $model->save();
                }
            }


        } else {
            echo "Erro no envio do post!";
        }
    }

    public static function login()
    {
        if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $loginModel = new UserModel();

            $loginModel->email = parent::cleanPost($_POST['email']);
            $loginModel->password = parent::cleanPost($_POST['password']);
            $loginModel->criptPass = sha1($loginModel->password);

            // Verifica se existe esse usuário
            if ($loginModel->isValidLogin($loginModel)) {
                // Cria um token para session
                $loginModel->token = sha1(uniqid().date('d-m-Y-H-i-s'));
                $loginModel->updateToken();

                // Guarda token na session
                $_SESSION['TOKEN'] = $loginModel->token;

                // Colocar para ir para algum lugar

            }
        } else {
            echo "Erro no envio do post";
        }
    }

    private static function registerValidation(UserModel $model): void {

        //Valida nome
        if (!preg_match("/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ'\s]+$/", $model->name)) {
            $model->error = ['nameError' => 'Nome inválido'];
        }

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