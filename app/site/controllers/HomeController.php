<?php

namespace app\site\controllers;

use app\core\Controller;

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

        $this->View('home', [
            "packagesXML" => $packagesXML
        ]);
    }

    public function getXML()
    {
        $myXML = simplexml_load_file("app/site/models/XML/packgesList.xml");
        return $myXML;
    }
}
