<?php

namespace app\site\controllers;

use app\core\Controller;
use app\site\models\UserModel;

class HomeController extends Controller
{
    private $packagesXML;

    public function __construct()
    {
    }
    public function index()
    {
        $packagesXML = $this->getXML();
        /* TESTE 
            dd($packagesXML);
        */

        session_start();
        $model = new UserModel();
        if (isset($_SESSION)) {
            if (empty($_SESSION['token'])) {
                $_SESSION['token'] = 'Erro session inexistente';
            } elseif ($model->isValidSession($_SESSION['token'])) {
                $this->View('home', [
                    "packagesXML" => $packagesXML,
                    'logedIn' => true
                ]);
            } else {
                $this->View('home', [
                    "packagesXML" => $packagesXML
                ]);
            }
        } else {
            $this->View('home', [
                "packagesXML" => $packagesXML
            ]);
        }
    }

    public function getXML()
    {
        $myXML = simplexml_load_file("app/site/models/XML/packgesList.xml");
        return $myXML;
    }
}
