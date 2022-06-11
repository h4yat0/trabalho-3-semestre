<?php

namespace app\site\models;

use app\site\DAO\ClientDAO;

class ClientModel
{
    public string $cep;
    public string $address;
    public string $phoneNumber;
    public string $registerDate;

    /**
     * @param string $registerDate
     */
    public function setRegisterDate(string $registerDate): void
    {
        $this->registerDate = $registerDate;
    }

    public function save(): void
    {

        $dao = new ClientDAO();

        $dao->insert($this);
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