<?php

namespace classes;

use classes\User;
use PDO;
use PDOException;

/**
 * Summary of HotelStaff
 */
class HotelStaff extends User
{
    /**
     * Summary of getReservationCount
     * @return mixed
     */
    public static function getReservationCount()
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "SELECT COUNT(Res_Id) FROM Reservation;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $count = $pstmt->fetch(PDO::FETCH_BOTH);
            return $count[0];
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    /**
     * Summary of getFacilityCount
     * @return mixed
     */
    public static function getFacilityCount()
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "SELECT COUNT(Fac_Id) FROM Facility;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $count = $pstmt->fetch(PDO::FETCH_BOTH);
            return $count[0];
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    /**
     * Summary of getRoomCount
     * @return mixed
     */
    public static function getRoomCount()
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "SELECT COUNT(Room_Id) FROM Room;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $count = $pstmt->fetch(PDO::FETCH_BOTH);
            return $count[0];
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    /**
     * Summary of getReservation1
     * @return array
     */
    public static function getReservation1()
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "SELECT * FROM Reservation ORDER BY Res_Date;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $rs = $pstmt->fetchAll(PDO::FETCH_BOTH);
            return $rs;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    /**
     * Summary of getReservation2
     * @param mixed $userId
     * @return mixed
     */
    public static function getReservation2($userId)
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "SELECT Username FROM User WHERE User_Id = ?;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $userId);
            $pstmt->execute();
            $rs = $pstmt->fetch(PDO::FETCH_BOTH);
            return $rs[0];
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    /**
     * Summary of getReservation3
     * @param mixed $userId
     * @return mixed
     */
    public static function getReservation3($userId)
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "SELECT Tel FROM User_Details WHERE User_Id = ?;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $userId);
            $pstmt->execute();
            $rs = $pstmt->fetch(PDO::FETCH_BOTH);
            return $rs[0];
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    /**
     * Summary of getReservation4
     * @param mixed $userId
     * @return mixed
     */
    public static function getReservation4($userId)
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "SELECT Fac_Name FROM Facility WHERE Fac_Id = ?;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $userId);
            $pstmt->execute();
            $rs = $pstmt->fetch(PDO::FETCH_BOTH);
            return $rs[0];
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    /**
     * Summary of getReservation5
     * @param mixed $userId
     * @return mixed
     */
    public static function getReservation5($userId)
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "SELECT Room_Type FROM Room WHERE Room_Id = ?;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $userId);
            $pstmt->execute();
            $rs = $pstmt->fetch(PDO::FETCH_BOTH);
            return $rs[0];
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    /**
     * Summary of getFacility
     * @return array
     */
    public static function getFacility()
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "SELECT * FROM Facility ORDER BY Fac_Price;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $rs = $pstmt->fetchAll(PDO::FETCH_BOTH);
            return $rs;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    /**
     * Summary of getRoom
     * @return array
     */
    public static function getRoom()
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "SELECT * FROM Room ORDER BY Room_Price;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $rs = $pstmt->fetchAll(PDO::FETCH_BOTH);
            return $rs;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    /**
     * Summary of cancelReservation
     * @param mixed $resId
     * @return void
     */
    public static function cancelReservation($resId)
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "UPDATE Reservation SET Status = ? WHERE Res_Id = ?;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, "Canceled");
            $pstmt->bindValue(2, $resId);
            $a = $pstmt->execute();

            if ($a > 0) {
                header("Location: ../hotelStaff_reservations.php?status=2");
            } else {
                header("Location: ../hotelStaff_reservations.php?status=1");
            }
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    /**
     * Summary of approveReservation
     * @param mixed $resId
     * @return void
     */
    public static function approveReservation($resId)
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "UPDATE Reservation SET Status = ? WHERE Res_Id = ?;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, "Reserved");
            $pstmt->bindValue(2, $resId);
            $a = $pstmt->execute();

            if ($a > 0) {
                header("Location: ../hotelStaff_reservations.php?status=2");
            } else {
                header("Location: ../hotelStaff_reservations.php?status=1");
            }
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    /**
     * Summary of addFacility
     * @param mixed $facName
     * @param mixed $facDesc
     * @param mixed $features
     * @param mixed $price
     * @param mixed $filename
     * @return void
     */
    public static function addFacility($facName, $facDesc, $features, $price, $filename)
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "INSERT INTO Facility(Fac_Name, Fac_Price, Fac_Description, Fac_Features, Fac_Image) VALUES(?, ?, ?, ?, ?);";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $facName);
            $pstmt->bindValue(2, $price);
            $pstmt->bindValue(3, $facDesc);
            $pstmt->bindValue(4, $features);
            $pstmt->bindValue(5, $filename);
            $a = $pstmt->execute();

            if ($a > 0) {
                header("Location: ../hotelStaff_facilities.php?status=5");
            } else {
                header("Location: ../hotelStaff_facilities.php?status=4");
            }
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    /**
     * Summary of deleteFacility
     * @param mixed $facId
     * @return void
     */
    public static function deleteFacility($facId)
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "DELETE FROM Facility WHERE Fac_Id = ?;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $facId);
            $a = $pstmt->execute();

            if ($a > 0) {
                header("Location: ../hotelStaff_facilities.php?status=7");
            } else {
                header("Location: ../hotelStaff_facilities.php?status=6");
            }
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    /**
     * Summary of addRoom
     * @param mixed $roomType
     * @param mixed $features
     * @param mixed $price
     * @param mixed $filename
     * @return void
     */
    public static function addRoom($roomType, $features, $price, $filename)
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "INSERT INTO Room(Room_Price, Room_Type, Room_Features, Room_Image) VALUES(?, ?, ?, ?);";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $price);
            $pstmt->bindValue(2, $roomType);
            $pstmt->bindValue(3, $features);
            $pstmt->bindValue(4, $filename);
            $a = $pstmt->execute();

            if ($a > 0) {
                header("Location: ../hotelStaff_rooms.php?status=5");
            } else {
                header("Location: ../hotelStaff_rooms.php?status=4");
            }
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    /**
     * Summary of deleteRoom
     * @param mixed $roomId
     * @return void
     */
    public static function deleteRoom($roomId)
    {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "DELETE FROM Room WHERE Room_Id = ?;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $roomId);
            $a = $pstmt->execute();

            if ($a > 0) {
                header("Location: ../hotelStaff_rooms.php?status=7");
            } else {
                header("Location: ../hotelStaff_rooms.php?status=6");
            }
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}