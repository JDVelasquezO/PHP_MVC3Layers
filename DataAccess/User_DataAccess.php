<?php

require_once "Connection/Connection.php";
require_once "../../Entity/User.php";

class User_DataAccess
{
    private $connect, $conn;
    private $user;

    public function __construct()
    {
        $this->connect = new Connection();
        $this->conn = $this->connect->getConnection();

        $this->user = new User("", "", "");
    }

    public function getUserWithCredentials($email, $pass) {

        $query = "SELECT id_client FROM client WHERE email = '$email' AND pass = '$pass' ";
        $response = $this->conn->query($query);

        if (!$response) {
            return "El sitio web experimenta problemas";
        }

        if ($response->num_rows === 0){
            return "false";
        }

        $userArray = $response->fetch_assoc();
        $this->user->setIdUser($userArray['id_client']);
        return $this->user;
    }

    public function getUserById($id) {
        $query = "SELECT * FROM client WHERE id_client = '$id' ";
        $response = $this->conn->query($query);

        if (!$response) {
            return "El sitio web experimenta problemas";
        }

        if ($response->num_rows === 0){
            return "false";
        }

        $userArray = $response->fetch_assoc();
        $this->user->setNameUser($userArray['name_client']);
        $this->user->setEmail($userArray['email']);
        return $this->user;
    }
}