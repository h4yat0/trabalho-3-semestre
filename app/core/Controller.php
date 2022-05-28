<?php

namespace app\core;

abstract class Controller
{
    /*
     * Carrega uma página de template do Twig a partir do diretório e nome especificado.
     * Não informar .twig.php junto ao nome da página, pois é inserido automaticamente
    */

    protected static function View(string $page, array $params = []): void
    {
        $page .= '.html.twig';
        $loader = new \Twig\Loader\FilesystemLoader('app/site/views');
        $twig = new \Twig\Environment($loader);
        echo $twig->render($page, $params);
    }

    protected static function cleanPost($data): string
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
}
