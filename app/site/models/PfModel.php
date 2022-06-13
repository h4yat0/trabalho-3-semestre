<?php

namespace app\site\models;

use app\site\DAO\PfDAO;

class PfModel
{
    public string $cpf = '';
    public string $name = '';
    public string $gender;
    public string $rg ='';
    public string $birthday;
    public array $error = [];

    public function save($id): void
    {
        $dao = new PfDAO();


        $dao->insert($this, $id);
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

    public function isPf($id)
    {
        $dao = new PfDAO();

        if ($dao->isPf($id)) {
            return true;
        } else {
            return false;
        }
    }

    public function isRepeatedCpf(string $cpf): bool {
        $dao = new PfDAO();

        if ($dao->selectCpf($cpf)) {
            return true;
        } else {
            return false;
        }
    }

    public function isRepeatedRg(string $rg): bool {
        $dao = new PfDAO();

        if ($dao->selectCpf($rg)) {
            return true;
        } else {
            return false;
        }
    }
}