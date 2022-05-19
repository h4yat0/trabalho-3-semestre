<?php
    class Core {
        public function start($urlGet) {
            
            $action = 'index';
            
            if (isset($urlGet['pagina'])){
                $controller = ucfirst($urlGet['pagina'].'Controller');

            } else {
                $controller = 'HomeController';
            }   

            if (!class_exists($controller)) {
                $controller = 'ErrorController';
            }

            call_user_func_array(array(new $controller, $action), array());

        }
    }
?>