<?php
namespace classes;

use PDO;
use PDOException;

class DbConnector
{
    private $db_host = "localhost";
    private $db_name = "DB_Hotel";
    private $db_user = "root";
    private $db_pass = "";
    private $con;

    public function connect()
    {
        $dsn = "mysql:host=" . $this->db_host . ";dbname=" . $this->db_name . ";";

        try {
            $this->con = new PDO($dsn, $this->db_user, $this->db_pass);
            return $this->con;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}