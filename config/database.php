<?php
class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = 'sql123!@#';
    private $dbname = 'db_sipp311';
    private $conn;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if ($this->conn->connect_error) {
            die('Koneksi gagal: ' . $this->conn->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function close()
    {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
