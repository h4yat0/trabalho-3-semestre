<?php
namespace app;

spl_autoload_register(function ($className) {

    $file = BASEDIR . '/' . $className . '.php';

    if (file_exists($file)) {
        include $file;
    } else {
        exit('Arquivo não encontrado. Arquivo: ' . $file . "<br />");
    }
});