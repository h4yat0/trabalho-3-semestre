<?php

namespace app\site\controllers;

use app\core\Controller;
use app\site\models\UserModel;

class PackageController extends Controller
{

    public function index(string $packageName, int $numberOfPeople, string $type, string $time, int $price, array $imgs)
    {
        $packageNameFormated = $this->format($packageName);
        $typeFormated = $this->format($type);
        $timeFormated = $this->format($time);
        $this->View('package', [
            'packageName' => $packageNameFormated,
            'numberOfPeople' => $numberOfPeople,
            'type' =>  $typeFormated,
            'time' => $timeFormated,
            'price' => $price,
            'imgs' => $imgs
        ]);
    }

    public function format(string $param)
    {
        $param = str_replace('%20', ' ', $param);
        $param = str_replace('%C3%A9', 'é', $param);
        return $param;
    }
}
