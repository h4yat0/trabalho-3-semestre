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

        $treatedCountriesjson = $this->getJson();
        /* TESTE
        foreach ($myJsonData as $value) {
            foreach ($value as $value1) {
                echo $value1['countryName'] . '<br>';
                echo $value1['description'] . '<br>';

                foreach ($value1 as $value2)
                    if (is_array($value2)) {
                        foreach ($value2 as $value3) {
                            echo $value3['name'] . '<br>';
                        }
                    }
            }
        }
        dd($myJsonData);
        */

        $this->View('countriesList', [
            "countriesJson" => $treatedCountriesjson,
        ]);
    }

    public function getJson()
    {
        $myJson =  file_get_contents('app/site/models/JSON/countriesList.json', true);
        $myJsonData = json_decode($myJson, true);

        return $myJsonData;
    }
}
