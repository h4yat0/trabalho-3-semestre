<?php

$xamp = false;

/*
    prod.php  => xamp
    local.php => QA | localhost
*/


$file = $xamp ? 'xamp.php' : 'phpN.php';


require_once('env/' . $file);

// Config DataBase
$_ENV['db']['host'] = 'localhost';
$_ENV['db']['user'] = 'root';
$_ENV['db']['pass'] = '271202';
$_ENV['db']['database'] = 'login';

//Config autoload da certo
define('BASEDIR', dirname(__FILE__, 2));
