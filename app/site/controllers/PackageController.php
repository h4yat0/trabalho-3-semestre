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
            'typeOfPeople' => 'adultos',
            'price' => 280,
            'imgs' => [
                'placeholder-04.jpg',
                'placeholder-02.jpg',
                'placeholder-01.jpg',
                'placeholder-02.jpg',
                'placeholder-01.jpg',
                'placeholder-02.jpg',
                'placeholder-03.jpg'
            ]
        ]);
    }
}
