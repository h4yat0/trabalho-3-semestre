<?php

require_once('app/autoload.php');
require_once('vendor/autoload.php');

(new \app\core\Router());

/*
// data e hora
$dt = new DateTime("now", new DateTimeZone('America/Recife'));
$dataFinal = 'Jundiaí, São Paulo. ' . $dt->format('d/m/Y, H:i:s');



*/