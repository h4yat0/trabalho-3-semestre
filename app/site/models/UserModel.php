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

        if ($dao->selectEmail($email)) {
            return true;
        } else {
            return false;
        }
    }

    public function isValidLogin(): bool
    {
        $dao = new UserDAO();

        if ($dao->selectLogin($this)) {
            return true;
        } else {
            return false;
        }
    }

    public function updateToken(): void
    {
        $dao = new UserDAO();

        $dao->updateToken($this);
    }
    public function isValidSession(): bool
    {
        $dao = new UserDAO();

        if ($dao->selectToken($this->token)) {
            return true;
        } else {
            return false;
        }
    }

    public function userInfos(string $token)
    {
        $dao = new UserDAO();

        return $datas = $dao->selectToken($token);
    }
}