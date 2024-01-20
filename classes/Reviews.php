<?php
namespace Classes;

use classes\DBconnector;
use PDO;
use PDOException;

class Reviews
{

    private $review_id;
    private $room_name;
    private $rating;
    private $review_body;

    public function __construct($room_name, $rating, $review_body)
    {
        $this->room_name = $room_name;
        $this->rating = $rating;
        $this->review_body = $review_body;
    }
    public function getRoomName()
    {
        return $this->room_name;
    }
    public function getRating()
    {
        return $this->rating;
    }
    public function getReview()
    {
        return $this->review_body;
    }

    public function addReview()
    {
        try {
            $dbcon = new DBconnector();
            $con = $dbcon->connect();
            $query = "INSERT INTO Review(Room_Name,Rating,Review)VALUES(?,?,?)";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->room_name);
            $pstmt->bindValue(2, $this->rating);
            $pstmt->bindValue(3, $this->review_body);
            $pstmt->execute();
            if ($pstmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            echo "Error in add review method:" . $ex->getMessage();
        }
    }

    public static function showReviews()
    {
        $review_list = array();
        try {
            $dbcon = new DBconnector();
            $con = $dbcon->connect();
            $query = "SELECT *FROM review";
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $result = $pstmt->fetchAll(PDO::FETCH_OBJ);
            if (!empty($result)) {
                foreach ($result as $review) {
                    $review = new Reviews($review->Room_Name, $review->Rating, $review->Review);
                    $review_list[] = $review;
                }
            } else {
                echo "nothing to display";
            }
            return $review_list;
        } catch (PDOException $ex) {
            echo "Error in showReviews method:" . $ex->getMessage();
        }
    }

}