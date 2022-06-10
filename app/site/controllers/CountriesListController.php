<?php

namespace app\site\controllers;

use app\core\Controller;
use app\site\models\UserModel;

class CountriesListController extends Controller
{

    public function __construct()
    {
    }
    public function index()
    {
        session_start();
        $model = new UserModel();
        if (isset($_SESSION))
        {
            if(empty($_SESSION['token'])) {
                $_SESSION['token'] = 'Erro session inexistente';
            } elseif ($model->isValidSession($_SESSION['token'])){
                $this->View('countriesList', [
                    'BASE' => BASE,
                    'logedIn' => true
                ]);
            } else {
                $this->View('countriesList', [
                    'BASE' => BASE
                ]);
            }
        } else {
            $this->View('countriesList', [
                'BASE' => BASE
            ]);
        }
    }
}
