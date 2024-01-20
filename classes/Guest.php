<?php

namespace classes;

use classes\User;
use classes\DbConnector;
use PDO;
use PDOException;

require_once '../classes/User.php';
require_once '../classes/DbConnector.php';

class Guest extends User
{
    private $userDetailsId;
    private $fname;
    private $lname;
    private $email;
    private $tel;

    public function __construct($username, $password, $role, $fname, $lname, $email, $tel)
    {
        parent::__construct($username, $password);
        $this->role = $role;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->tel = $tel;
    }

    public function register()
    {
        $dbcon = new DBConnector;
        $con = $dbcon->connect();

        $query1 = "SELECT * FROM User WHERE Username = ?;";
        $query2 = "INSERT INTO User(Username, Password, Role) VALUES(?, ?, ?);";
        $query3 = "INSERT INTO User_Details(User_Id, Fname, Lname, Email, Tel) VALUES(?, ?, ?, ?, ?);";
        $query4 = "DELETE FROM User WHERE Username = ?;";

        try {
            $pstmt1 = $con->prepare($query1);
            $pstmt1->bindValue(1, $this->username);
            $pstmt1->execute();
            $rs1 = $pstmt1->fetchAll(PDO::FETCH_BOTH);

            if (count($rs1) > 0) {
                header("Location: ../register.php?status=4");
            } else {
                $pstmt2 = $con->prepare($query2);
                $pstmt2->bindValue(1, $this->username);
                $pstmt2->bindValue(2, $this->password);
                $pstmt2->bindValue(3, $this->role);
                $a1 = $pstmt2->execute();

                if ($a1 > 0) {
                    $pstmt3 = $con->prepare($query1);
                    $pstmt3->bindValue(1, $this->username);
                    $pstmt3->execute();
                    $rs2 = $pstmt3->fetch(PDO::FETCH_BOTH);
                    $this->userId = $rs2['User_Id'];

                    $pstmt4 = $con->prepare($query3);
                    $pstmt4->bindValue(1, $this->userId);
                    $pstmt4->bindValue(2, $this->fname);
                    $pstmt4->bindValue(3, $this->lname);
                    $pstmt4->bindValue(4, $this->email);
                    $pstmt4->bindValue(5, $this->tel);
                    $a2 = $pstmt4->execute();

                    if ($a2 > 0) {
                        header("Location: ../register.php?status=6");
                    } else {
                        $pstmt5 = $con->prepare($query4);
                        $pstmt5->bindValue(1, $this->username);
                        $pstmt5->execute();
                        header("Location: ../register.php?status=5");
                    }
                } else {
                    header("Location: ../register.php?status=5");
                }
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}