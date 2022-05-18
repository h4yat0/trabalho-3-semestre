<?php

    require_once './Core/core.php';

    require_once './Controllers/HomeController.php';
    require_once './Controllers/ErrorController.php';

    require_once 'vendor/autoload.php';

    $template = file_get_contents('./Views/Shared/__template.php');

    ob_start();
        $core = new Core;
        $core->start($_GET);

        $saida = ob_get_contents();
    ob_end_clean();

    $tplReady = str_replace('{{content}}', $saida, $template);

    echo $tplReady;
?>