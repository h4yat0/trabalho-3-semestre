<?php

namespace app\site\DAO;

use app\site\models\PjModel;

class PjDAO extends \app\core\DAO
{
    public function  __construct() {
        parent::__construct();
    }

    public function insert(PjModel $model): void
    {
        $sql = "INSERT INTO pessoa_juridica VALUES (?, ?, ?)";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($model->socialReason, $model->companyName, $model->cnpj));
    }

    public function update(PjModel $model, String $clientCode) {
        $sql = "UPDATE pessoa_juridica SET razao_social=?, nome_empresa=?, cnpj=? WHERE cliente_codigo=? LIMIT 1";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($model->socialReason, $model->companyName, $model->cnpj, $clientCode));
    }

    public function delete($clientCode) {
        $sql = "DELETE FROM pessoa_juridica WHERE cliente_codigo=?";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($clientCode));
    }

    public function selectClientCode(string $clientCode) {
        $sql = "SELECT * FROM pessoa_juridica WHERE cliente_codigo=? LIMIT 1";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($clientCode));

        return $datas = $stmt->fetch(PDO::FETCH_OBJ);
    }
}