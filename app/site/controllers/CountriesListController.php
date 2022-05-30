<?php

namespace app\site\controllers;

use app\core\Controller;

class CountriesListController extends Controller
{

    public function __construct()
    {
    }
    public function index()
    {
        $this->View('countriesList', [
            'BASE' => BASE
        ]);
    }
}
