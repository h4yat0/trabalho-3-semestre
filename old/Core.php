<?php
class Core
{
    public function start($urlGet)
    {

        $action = 'index';

        if (isset($urlGet['page'])) {
            $controller = ucfirst($urlGet['page'] . 'Controller');
        } else {
            $controller = 'HomeController';
        }
        echo $controller;
        if (!class_exists($controller)) {
            $controller = 'ErrorController';
        }

        call_user_func_array(array(new $controller, $action), array());
    }

    public function getTitle($urlGet)
    {
        if (isset($urlGet['page'])) {
            $controllerTitle = ucfirst($urlGet['page']);
        } else {
            $controllerTitle = 'Home';
        }

        if (!class_exists($controllerTitle . "Controller")) {
            $controllerTitle = 'Error';
        }

        return $controllerTitle;
    }
}
