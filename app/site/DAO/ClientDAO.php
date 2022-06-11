<?php

namespace app\site\DAO;

use app\site\models\ClientModel;

class ClientDAO extends \app\core\DAO
{

    public function  __construct() {
        parent::__construct();
    }

    public function insert(ClientModel $model): void
    {
        $sql = "INSERT INTO cliente VALUES (null, ?, ?, ?, ?)";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($model->cep, $model->phoneNumber, $model->address, $model->registerDate));
    }

    public function update(ClientModel $model, String $id) {
        $sql = "UPDATE cliente SET cep=?, telefone=?, endereco=? WHERE usuario_id=? LIMIT 1";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($model->cep, $model->phoneNumber, $model->address, $id));
    }

    public function delete($id) {
        $sql = "DELETE FROM cliente WHERE usuario_id=?";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($id));
    }

    public function selectUserId(string $id) {
        $sql = "SELECT * FROM cliente WHERE usuario_id=? LIMIT 1";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($id));

        return $datas = $stmt->fetch(PDO::FETCH_OBJ);
    }
}