<?php


class Connection
{
    private $host, $user, $pass, $db;

    public function __construct()
    {
        $this->host = 'localhost:3306';
        $this->user = 'root';
        $this->pass = '';
        $this->db = 'StoreOnline';
    }

    public function getConnection() {
        $conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        $conn->set_charset('utf8');
        return $conn;
    }
}
