<?php

namespace app\site\controllers;

use app\core\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $this->View('profile', [
            "name" =>  "Hayato",
            "email" => "something@gmail.com",
            "phoneNumber" => "(XX) XXXX-XXXX",
            "password" => "******"
        ]);
    }
}
