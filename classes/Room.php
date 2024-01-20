<?php

namespace Classes;

require 'DBconnector.php';

use classes\DBconnector;
use PDOException;
use PDO;

class Room {

    private $room_id;
    private $room_price;
    private $room_type;
    private $room_features;
    private $room_image;

    public function __construct($room_type, $room_price, $room_features, $room_image) {
        $this->room_type = $room_type;
        $this->room_price = $room_price;
        $this->room_features = $room_features;
        $this->room_image = $room_image;
    }

    public function getRoomId() {
        return $this->room_id;
    }

    public function getRoomType() {
        return $this->room_type;
    }

    public function getRoomPrice() {
        return $this->room_price;
    }

    public function getRoomFeatures() {
        return $this->room_features;
    }

    public function getRoomImage() {
        return $this->room_image;
    }

    public static function showRoomDetails() {
        $room_list = array();
        try {
            $dbcon = new DBconnector();
            $con = $dbcon->connect();
            $query = "SELECT *FROM room";
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $result = $pstmt->fetchAll(PDO::FETCH_OBJ);
            if (!empty($result)) {
                foreach ($result as $room) {
                    $room = new Room($room->Room_Type, $room->Room_Price, $room->Room_Features, $room->Room_Image);
                    $room_list[] = $room;
                }
            } else {
                echo "Room list is empty!";
            }
            return $room_list;
        } catch (PDOException $ex) {
            echo "Error in showRoomDetails:" . $ex->getMessage();
        }
    }
}
