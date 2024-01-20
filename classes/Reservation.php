<?php

namespace classes;

session_start();
use PDO;
use PDOException;

require_once "DbConnector.php";

function Reservation()
{
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Check if the form fields are set and not empty
        if (
            isset($_POST["room"]) && isset($_POST["facility"]) && isset($_POST["date"]) &&
            !empty($_POST["room"]) && !empty($_POST["facility"]) && !empty($_POST["date"])
        ) {

            $room = filter_input(INPUT_POST, "room", FILTER_SANITIZE_STRING);
            $facility = filter_input(INPUT_POST, "facility", FILTER_SANITIZE_STRING);
            $date = $_POST["date"]; // No need to sanitize, as it is a date input


            $db = new \classes\DbConnector();
            $conn = $db->connect();

            if ($conn) {
                try {
                    $conn->beginTransaction();

                    $roomPrice = getRoomPrice($conn, $room)['Room_Price'];
                    $roomId = getRoomPrice($conn, $room)['Room_Id'];
                    $facilityPrice = getFacilityPrice($conn, $facility)['Fac_Price'];
                    $facilityId = getFacilityPrice($conn, $facility)['Fac_Id'];
                    $totalPrice = $roomPrice + $facilityPrice;

                    $userId = $_SESSION['userId'];

                    $sql = "INSERT INTO reservation (User_Id, Res_Price, Res_Date, Status, Fac_Id, Room_Id) VALUES (:user_id, :res_price, :res_date, :status, :fac_id, :room_id)";

                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(":user_id", $userId, PDO::PARAM_INT);
                    $stmt->bindParam(":res_price", $totalPrice, PDO::PARAM_INT);
                    $stmt->bindParam(":res_date", $date, PDO::PARAM_STR);
                    $stmt->bindValue(":status", "Pending", PDO::PARAM_STR);
                    $stmt->bindParam(":fac_id", $facilityId, PDO::PARAM_INT);
                    $stmt->bindParam(":room_id", $roomId, PDO::PARAM_INT);

                    $stmt->execute();
                    $conn->commit();

                    header("Location: ../reservations.php");
                    exit;
                } catch (PDOException $e) {
                    $conn->rollBack();
                    echo "Error: " . $e->getMessage();
                }
            } else {
                echo "Error: Unable to connect to the database.";
            }
        } else {
            echo "Error: All fields are required.";
        }
    }
}

function getRoomPrice($conn, $room)
{
    $sql = "SELECT Room_Id, Room_Price FROM room WHERE Room_Type = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $room);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function getFacilityPrice($conn, $facility)
{
    $sql = "SELECT Fac_Id, Fac_Price FROM facility WHERE Fac_Name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $facility);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

Reservation();