<?php

/**
 * As classes DAO (Data Access Object) são responsáveis por executar os
 * SQL junto ao banco de dados.
 */
namespace app\site\DAO;
use app\site\models\UserModel;
use PDO;

class UserDAO {
    private PDO $connect;

    public function  __construct() {
        // DSN (Data Source Name) onde o servidor MySQL será encontrado
        $dsn = "mysql:host=localhost;dbname=login";

        $this->connect = new PDO("$dsn", 'root', '271202');
    }

    public function insert(UserModel $model): void
    {
        $sql = "INSERT INTO usuarios VALUES (null, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($model->name, $model->email, $model->password, $model->token, $model->registerDate, $model->phoneNumber));
    }

    public function update() {

    }

    public function select() {

    }
}