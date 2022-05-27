<?php
namespace app\site\controllers;
use app\core\Controller;
use app\site\models\UserModel;

class UserController extends Controller {

    public static function save() {
        include '../models/UserModel.php';

        $model = new UserModel();

        $model->name = $_POST['name'];
        $model->email = $_POST['email'];
        $model->phoneNumber = $_POST['phoneNumber'];
        $model->password = $_POST['password'];
        $model->repeatPassword = $_POST['repeatPassword'];
        $model->setRegisterDate(date('d/m/Y'));

        $model->save();
    }
}