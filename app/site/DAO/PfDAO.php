<?php

namespace app\site\DAO;

use app\site\models\PfModel;
use PDO;

class PfDAO extends \app\core\DAO
{
    public function  __construct() {
        parent::__construct();
    }

    public function insert(PfModel $model, string $id): void
    {
        $sql = "INSERT INTO pessoa_fisica (cliente_codigo, cpf, nome_completo, sexo, rg, data_nascimento) VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($id, $model->cpf, $model->name, $model->gender, $model->rg, $model->birthday));
    }

    public function update(PfModel $model, String $clientCode) {
        $sql = "UPDATE pessoa_fisica SET cpf=?, nome_completo=?, sexo=?, rg=?, data_nascimento=? WHERE cliente_codigo=? LIMIT 1";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($model->cpf, $model->name, $model->gender, $model->rg, $model->birthday, $clientCode));
    }

    public function delete($clientCode) {
        $sql = "DELETE FROM pessoa_fisica WHERE cliente_codigo=?";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($clientCode));
    }

    public function selectClientCode(string $clientCode) {
        $sql = "SELECT * FROM pessoa_fisica WHERE cliente_codigo=? LIMIT 1";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($clientCode));

        return $datas = $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function isPf($id)
    {
        $sql = "SELECT * FROM pessoa_fisica WHERE cliente_codigo=? LIMIT 1";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($id));
        return $user = $stmt->fetch();
    }
    public function selectCpf(string $cpf)
    {
        $sql = "SELECT * FROM pessoa_fisica WHERE cpf=? LIMIT 1";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($cpf));
        return $user = $stmt->fetch();
    }

    public function selectRg(string $rg)
    {
        $sql = "SELECT * FROM pessoa_fisica WHERE rg=? LIMIT 1";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute(array($rg));
        return $user = $stmt->fetch();
    }
}