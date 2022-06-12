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
    public function  __construct()
    {
        parent::__construct();
    }
    public function insert(UserModel $model)
    {
        session_start();
        $sql = "INSERT INTO usuario VALUES (null, ?, ?, ?)";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($model->email, $model->criptPass, $model->token));
    }

    public function update(UserModel $model) {
        $sql = "UPDATE usuario SET email=?, senha=? WHERE token=? LIMIT 1";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($model->email, $model->criptPass, $model->token));
    }

    public function updateToken(UserModel $loginModel) {
        $sql = "UPDATE usuario SET token=? WHERE email=? AND senha=?";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($loginModel->token, $loginModel->email, $loginModel->criptPass));
    }

    public function delete(string $email, string $token) {
        $sql = "DELETE FROM usuario WHERE email=? AND token=?";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($email, $token));
    }

    public function selectEmail(string $email)
    {
        $sql = "SELECT * FROM usuario WHERE email=? LIMIT 1";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($email));
        return $user = $stmt->fetch();
    }

    public function selectLogin(UserModel $loginModel)
    {
        $sql = "SELECT * FROM usuario WHERE email=? AND senha=? LIMIT 1";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($loginModel->email, $loginModel->criptPass));
        return $loginUser = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function selectToken(string $token) {
        $sql = "SELECT * FROM usuario WHERE token=? LIMIT 1";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($token));

        return $token = $stmt->fetch(PDO::FETCH_OBJ);
    }


}