<?php

namespace app\site\models;

use app\site\DAO\PjDAO;

class PjModel
{
    public string $socialReason;
    public string $companyName;
    public string $cnpj;

    public function save(): void
    {

        $dao = new PjDAO();

        $dao->insert($this);
    }

    public function delete(string $clientCode): void
    {
        $dao = new PjDAO();

        $dao->delete($clientCode);
    }

    public function update(String $clientCode): void
    {
        $dao = new PjDAO();

        $dao->update($this, $clientCode);
    }

    public function clientInfos(string $clientCode)
    {
        $dao = new PjDAO();

        return $datas = $dao->selectClientCode($clientCode);
    }
}