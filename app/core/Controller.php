<?php

namespace app\core;

class Controller
{
    /*
     * Carrega uma página de template do Twig a partir do diretório e nome especificado.
     * Não informar .twig.php junto ao nome da página, pois é inserido automaticamente
    */

    protected function View(string $page, array $params = [])
    {
        $page .= '.html.twig';
        $loader = new \Twig\Loader\FilesystemLoader('app/site/views');
        $twig = new \Twig\Environment($loader);
        echo $twig->render($page, $params);
    }
}
