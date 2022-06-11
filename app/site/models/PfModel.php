<?php

namespace app\site\models;

use app\site\DAO\PfDAO;

class PfModel
{
    public string $cpf;
    public string $name;
    public string $gender;
    public string $rg;
    public string $birthday;

    public function save(): void
    {

        $dao = new PfDAO();

        $dao->insert($this);
    }

    public function delete(string $clientCode): void
    {
        $dao = new PfDAO();

        $dao->delete($clientCode);
    }

    public function update(String $clientCode): void
    {
        $dao = new PfDAO();

        $dao->update($this, $clientCode);
    }

    public function clientInfos(string $clientCode)
    {
        $dao = new PfDAO();

        return $datas = $dao->selectClientCode($clientCode);
    }
}