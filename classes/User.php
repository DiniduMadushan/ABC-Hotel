<?php

namespace classes;

use classes\DbConnector;
use PDO;
use PDOException;

require_once 'DbConnector.php';

class User
{
    protected $userId;
    protected $username;
    protected $password;
    protected $role;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function login()
    {
        $dbcon = new DBConnector;
        $con = $dbcon->connect();

        $query = "SELECT User_Id, Password, Role FROM User WHERE Username = ?;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->username);
            $pstmt->execute();
            $rs = $pstmt->fetch(PDO::FETCH_BOTH);

            if ($pstmt->rowCount() > 0) {
                $dbPassword = $rs['Password'];
                $this->userId = $rs['User_Id'];

                if (password_verify($this->password, $dbPassword)) {
                    $_SESSION['login'] = true;
                    $_SESSION['userId'] = $this->userId;
                    $_SESSION['username'] = $this->username;
                    $_SESSION['role'] = $rs['Role'];

                    if($rs['Role'] == "Admin"){
                        header("Location: ../admin_dashboard.php");
                    } elseif($rs['Role'] == "Hotel Staff"){
                        header("Location: ../hotelStaff_dashboard.php");
                    } else{
                        header("Location: ../index.php");
                    }
                } else {
                    header("Location: ../login.php?status=2");
                }
            } else {
                header("Location: ../login.php?status=2");
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}