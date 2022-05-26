<?php

namespace app\core;

class Router
{
    private array $uriData;

    private string $controller;

    private string $method;

    private array $params;

    public function __construct()
    {
        //Controlador padrão, ex: HomeController
        $this->controller = 'Home';

        //Método padão, ex: index()
        $this->method     = 'index';

        //Parametro Padrão ex: []
        $this->params     = [];

        //Chama o método para formatar as propriedades
        $this->format();

        $this->run();
    }

    public function format()
    {
        $uri = $_SERVER['REQUEST_URI'];

        if (strpos($uri, '?') > 0) {
            $uri = substr($uri, 0, strpos($uri, '?'));
        }

        $ex = explode('/', $uri);

        if (!is_array($ex)) {
            return;
        }

        $ex = array_values(array_filter($ex));

        $this->uriData = array_values($ex);
    }

    public function run()
    {
        $controller = $this->getController();

        $method = $this->getMethod($controller);

        $params = $this->getParams();

        call_user_func_array([
            (new $controller),
            $method
        ], $params);
    }

    public function getController()
    {
        if (isset($this->uriData[0])) {
            $cont = $this->uriData[0];

            $cont = '\\app\\site\\controllers\\' . ucfirst($cont) . 'Controller';

            if (class_exists($cont)) {
                return $cont;
            }
        }

        return '\\app\\site\\controllers\\' . ucfirst($this->controller) . 'Controller';
    }

    public function getMethod(string $controllerPath)
    {
        $meth = $this->method; // index

        if (isset($this->uriData[1])) {
            $meth = $this->uriData[1];
        }

        if (method_exists($controllerPath, $meth)) {
            return $meth;
        }

        return $this->method;
    }

    public function getParams()
    {
        if (count($this->uriData) < 2) {
            return [];
        }

        $params = [];

        for ($i = 2; $i < count($this->uriData); $i++) {
            $params[] = $this->uriData[$i];
        }

        return $params;
    }
}
