<?php

namespace app\site\controllers;

use app\core\Controller;
use app\site\models\UserModel;

class PackageController extends Controller
{

    public function index()
    {
        $this->View('package', [
            'packageName' => 'Pestana Buenos Aires',
            'numberOfPeople' => 2,
            'typeOfPeople' => 'adultos'
        ]);
    }
}
