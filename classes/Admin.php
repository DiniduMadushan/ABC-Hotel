<?php

namespace classes;

use classes\User;
use PDO;
use PDOException;

class Admin extends User
{
    public function __construct($username, $password, $role)
    {
        parent::__construct($username, $password);
        $this->role = $role;
    }

    public static function getUserCount()
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "SELECT COUNT(User_Id) FROM User;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $count = $pstmt->fetch(PDO::FETCH_BOTH);
            return $count[0];
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function addNewUser()
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();

        $query1 = "SELECT * FROM User WHERE Username = ?;";
        $query2 = "INSERT INTO User(Username, Password, Role) VALUES(?, ?, ?);";

        try {
            $pstmt1 = $con->prepare($query1);
            $pstmt1->bindValue(1, $this->username);
            $pstmt1->execute();
            $rs1 = $pstmt1->fetchAll(PDO::FETCH_BOTH);

            if (count($rs1) > 0) {
                header("Location: ../admin_users.php?status=3");
            } else {
                $pstmt2 = $con->prepare($query2);
                $pstmt2->bindValue(1, $this->username);
                $pstmt2->bindValue(2, $this->password);
                $pstmt2->bindValue(3, $this->role);
                $a = $pstmt2->execute();

                if ($a > 0) {
                    header("Location: ../admin_users.php?status=5");
                } else {
                    header("Location: ../admin_users.php?status=4");
                }
            }
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function getGuestUsers()
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "SELECT * FROM User, User_Details WHERE User.User_Id = User_Details.User_Id AND User.Role = ?;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, "Guest");
            $pstmt->execute();
            $rs = $pstmt->fetchAll(PDO::FETCH_BOTH);
            return $rs;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function getOtherUsers()
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "SELECT * FROM User WHERE Role != ?;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, "Guest");
            $pstmt->execute();
            $rs = $pstmt->fetchAll(PDO::FETCH_BOTH);
            return $rs;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function deleteUser($userId)
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "DELETE FROM User WHERE User_Id = ?;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $userId);
            $a = $pstmt->execute();
            
            if ($a > 0) {
                header("Location: ../admin_users.php?status=7");
            } else {
                header("Location: ../admin_users.php?status=6");
            }
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}