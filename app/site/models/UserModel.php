<?php
namespace app\site\models;

use app\site\DAO\UserDAO;

class UserModel
{
    public string $email;
    public string $password;
    public string $criptPass;
    public string $repeatPassword;
    public string $token = "";
    public array $error = [];
    public ?string $idUser = null;

    /**
     * @return string
     */
    public function getIdUser(): string
    {
        return $this->idUser;
    }

    /**
     * @param string $idUser
     */
    public function setIdUser(string $idUser): void
    {
        $this->idUser = $idUser;
    }



    public function save()
    {
        $dao = new UserDAO();

        $dao->insert($this);

        $datas = $dao->selectLogin($this);

        return $datas['id'];
    }

    public function delete(string $email, string $token): void
    {
        $dao = new UserDAO();

        $dao->delete($email, $token);
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

    public function update(): void
    {
        $dao = new UserDAO();

        $dao->update($this);
    }

    public function updateToken(): void
    {
        $dao = new UserDAO();

        $dao->updateToken($this);
    }
    public function isValidSession(string $token): bool
    {
        $dao = new UserDAO();

        if ($dao->selectToken($token)) {
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