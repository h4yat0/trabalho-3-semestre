<?php

require_once 'app/autoload.php';
require_once('vendor/autoload.php');

(new \app\core\Router());
// (new \app\site\controllers\HomeController())->index();


/*require_once './Core/core.php';

require_once './Controllers/HomeController.php';
require_once './Controllers/CadastrarController.php';
require_once './Controllers/ErrorController.php';

require_once 'vendor/autoload.php';

$template = file_get_contents('./Views/Shared/__template.html.twig');

ob_start();
$core = new Core;
$core->start($_GET);

$saida = ob_get_contents();
ob_end_clean();


// data e hora
$dt = new DateTime("now", new DateTimeZone('America/Recife'));
$dataFinal = 'Jundiaí, São Paulo. ' . $dt->format('d/m/Y, H:i:s');


// titulo da página
$title = $core->getTitle($_GET);

// substituindo coisas no template
// $dataToReplace = array('{{content}}', '{{time}}', '{{title}}');
$dataToReplace = array('{{content}}');
// $data = array($saida, $dataFinal, $title);
$data = array($saida);
$tplReady = str_replace($dataToReplace, $data, $template);


// echo $tplReady;
*/