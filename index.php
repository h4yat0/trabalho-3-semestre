<?php
require_once './Core/core.php';

require_once './Controllers/HomeController.php';
require_once './Controllers/ErrorController.php';

require_once 'vendor/autoload.php';

$template = file_get_contents('./Views/Shared/__template.html');

ob_start();
$core = new Core;
$core->start($_GET);

$saida = ob_get_contents();
ob_end_clean();

$dt = new DateTime("now", new DateTimeZone('America/Recife'));
$dataFinal = 'Jundiaí, São Paulo. ' . $dt->format('d/m/Y, H:i:s');

$dataToReplace = array('{{content}}', '{{time}}');
$data = array($saida, $dataFinal);

$tplReady = str_replace($dataToReplace, $data, $template);


echo $tplReady;
