<?php

//Diretório base do projeto, se for root, então use apenas /
define('BASE', '/');


//Quantidade de diretórios a ser removido do array de tratamento
define('REMOVE_INDEX', 0);

// Config DataBase
$_ENV['db']['host'] = 'localhost';
$_ENV['db']['user'] = 'root';
$_ENV['db']['pass'] = '271202';
$_ENV['db']['database'] = 'login';

//Config autoload da certo
define('BASEDIR', dirname(__FILE__, 2));
