<?php
namespace app\site\models;

use app\site\DAO\UserDAO;

class UserModel
{
    public string $name;
    public string $email;
    public string $password;
    public string $repeatPassword;
    public string $phoneNumber;
    public string $token = "";
    public string $registerDate;
    public array $erro = [];

    /**
     * @param string $registerDate
     */
    public function setRegisterDate(string $registerDate): void
    {
        $this->registerDate = $registerDate;
    }

    public function save(): void
    {
        include '../DAO/UserDAO.php';

        $dao = new UserDAO();

        $dao->insert($this);
    }

}