<?php

namespace app\site\controllers;

use app\core\Controller;
use app\site\models\UserModel;

class PackageController extends Controller
{

    public function index(string $packageName, int $numberOfPeople, int $price, array $imgs)
    {
        $packageName = str_replace('%20', ' ', $packageName);
        $this->View('package', [
            'packageName' => $packageName,
            'numberOfPeople' => $numberOfPeople,
            'price' => $price,
            'imgs' => $imgs
        ]);
    }
}
