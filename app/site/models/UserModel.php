<?php
namespace app\site\models;

use app\site\DAO\UserDAO;

class UserModel
{
    public string $name;
    public string $email;
    public string $password;
    public string $criptPass;
    public string $repeatPassword;
    public string $phoneNumber;
    public string $token = "";
    public string $registerDate;
    public array $error = [];

    /**
     * @param string $registerDate
     */
    public function setRegisterDate(string $registerDate): void
    {
        $this->registerDate = $registerDate;
    }

    public function save(): void
    {

        $dao = new UserDAO();

        $dao->insert($this);
    }

    public function isRepeatedEmail(string $email): bool {
        $dao = new UserDAO();


        return $dao->selectEmail($email);
    }
}