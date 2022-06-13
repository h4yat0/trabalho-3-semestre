<?php

namespace app\site\models;

use app\site\DAO\PjDAO;

class PjModel
{
    public string $socialReason;
    public string $companyName;
    public ?string $cnpj = '';
    public array $error = [];

    public function save(string $id): void
    {

        $dao = new PjDAO();

        $dao->insert($this, $id);
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

        return $datas = $dao->selectClient($clientCode);
    }

    public function isRepeatedCnpj(string $cnpj): bool {
        $dao = new PjDAO();

        if ($dao->selectCnpj($cnpj)) {
            return true;
        } else {
            return false;
        }
    }
}