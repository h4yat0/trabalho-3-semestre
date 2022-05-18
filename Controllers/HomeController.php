<?php

class HomeController
{
    public function index()
    {
        try {
            $loader = new \Twig\Loader\FilesystemLoader('Views');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('home.html');

            $parametros = array();
            $parametros['nome'] = 'hyt';

            $content = $template->render($parametros);
            echo $content;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
