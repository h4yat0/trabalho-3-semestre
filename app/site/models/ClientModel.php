<?php

namespace app\site\models;

use app\site\DAO\ClientDAO;

class ClientModel
{
    public string $cep;
    public string $address='';
    public string $phoneNumber;
    public string $registerDate;
    public array $error = [];
    public ?string $idClient = null;

    /**
     * @return string
     */
    public function getIdClient(): string
    {
        return $this->idClient;
    }

    /**
     * @param string $idClient
     */
    public function setIdClient(string $idClient): void
    {
        $this->idClient = $idClient;
    }



    /**
     * @param string $registerDate
     */
    public function setRegisterDate(string $registerDate): void
    {
        $this->registerDate = $registerDate;
    }

    public function save($id)
    {

        $dao = new ClientDAO();

        $dao->insert($this, $id);

        $datas = $dao->selectClient($id);

        return $datas['codigo'];
    }

    public function delete(string $userId): void
    {
        $dao = new ClientDAO();

        $dao->delete($userId);
    }

    public function update(String $userId): void
    {
        $dao = new ClientDAO();

        $dao->update($this, $userId);
    }

    public function clientInfos(string $userId)
    {
        $dao = new ClientDAO();

        return $datas = $dao->selectUserId($userId);
    }
}