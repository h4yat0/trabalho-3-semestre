<?php

/**
 * As classes DAO (Data Access Object) são responsáveis por executar os
 * SQL junto ao banco de dados.
 */
namespace app\site\DAO;
use app\core\DAO;
use app\site\models\UserModel;
use PDO;

class UserDAO extends DAO {

    public function  __construct() {
        parent::__construct();
    }

    public function insert(UserModel $model): void
    {
        $sql = "INSERT INTO usuarios VALUES (null, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($model->name, $model->email, $model->criptPass, $model->token, $model->registerDate, $model->phoneNumber));
    }

    public function update(UserModel $model) {
        $sql = "UPDATE usuarios SET nome=?, email=?, telefone=?, token=?";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($model->name, $model->email, $model->phoneNumber, $model->token));
    }

    public function delete(int $id) {
        $sql = "DELETE FROM usuarios WHERE id=?";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($id));
    }

    public function select(int $id) {
        $sql = "SELECT * FROM usuarios WHERE id=";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($id));
    }

    public function selectEmail(string $email) {
        $sql = "SELECT * FROM usuarios WHERE email=? LIMIT 1";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($email));
        $user = $stmt->fetch();

        // Se não existir usuário

        if (!$user) {
            return false; // Se retornar false é pq não tem usuário
        } else {
            return true;
        }
    }
}