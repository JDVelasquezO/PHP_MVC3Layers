<?php

require_once "../../DataAccess/User_DataAccess.php";

class User_Logic
{
    private $userData;

    public function __construct()
    {
        $this->userData = new User_DataAccess();
    }

    public function AuthUser($email, $pass) {
        if ($email === '' || $pass === '') {
            return "false";
        }
        else {
            if ($this->userData->getUserWithCredentials($email, $pass) === 'false'){
                return 'false';
            } else {
                return $this->userData->getUserWithCredentials($email, $pass);
            }
        }
    }

    public function GetUserById($id) {
        return $this->userData->getUserById($id);
    }
}