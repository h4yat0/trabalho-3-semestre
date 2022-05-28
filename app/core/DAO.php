<?php

namespace app\core;

use PDO;

abstract class DAO
{
    protected PDO $connect;
    public function __construct()
    {
        // DSN (Data Source Name) onde o servidor MySQL será encontrado
        $dsn = "mysql:host=" . $_ENV['db']['host'] . ";dbname=" . $_ENV['db']['database'];

        $this->connect = new PDO($dsn, $_ENV['db']['user'], $_ENV['db']['pass']);
    }
}