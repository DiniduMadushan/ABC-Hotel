<?php
session_start();

use classes\User;
use classes\HotelStaff;

require_once '../classes/User.php';
require_once '../classes/HotelStaff.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['addFacility'])) {
        if (!empty($_POST['fac_name']) && !empty($_POST['fac_desc']) && !empty($_POST['features']) && !empty($_POST['price']) && $_FILES['fac_image']['error'] === UPLOAD_ERR_OK) {
            if (pathinfo($_FILES['fac_image']['name'])['extension'] == "jpg" || pathinfo($_FILES['fac_image']['name'])['extension'] == "jpeg" || pathinfo($_FILES['fac_image']['name'])['extension'] == "jpg" || pathinfo($_FILES['fac_image']['name'])['extension'] == "png") {
                $facName = strip_tags($_POST['fac_name']);
                $facDesc = strip_tags($_POST['fac_desc']);
                $features = strip_tags($_POST['features']);
                $price = strip_tags($_POST['price']);
                $filename = $_FILES['fac_image']['name'];
                $tempname = $_FILES['fac_image']['tmp_name'];
                $folder = "../assets/img/Facilities_images/" . $filename;

                if (move_uploaded_file($tempname, $folder)) {
                    HotelStaff::addFacility($facName, $facDesc, $features, $price, $filename);
                } else {
                    header("Location: ../hotelStaff_facilities.php?status=3");
                }
            } else {
                header("Location: ../hotelStaff_facilities.php?status=2");
            }
        } else {
            header("Location: ../hotelStaff_facilities.php?status=1");
        }
    } elseif (isset($_POST['addRoom'])) {
        if (!empty($_POST['room_type']) && !empty($_POST['features']) && !empty($_POST['price']) && $_FILES['room_image']['error'] === UPLOAD_ERR_OK) {
            if (pathinfo($_FILES['room_image']['name'])['extension'] == "jpg" || pathinfo($_FILES['room_image']['name'])['extension'] == "jpeg" || pathinfo($_FILES['room_image']['name'])['extension'] == "jpg" || pathinfo($_FILES['room_image']['name'])['extension'] == "png") {
                $roomType = strip_tags($_POST['room_type']);
                $features = strip_tags($_POST['features']);
                $price = strip_tags($_POST['price']);
                $filename = $_FILES['room_image']['name'];
                $tempname = $_FILES['room_image']['tmp_name'];
                $folder = "../assets/img/Room_images/" . $filename;

                if (move_uploaded_file($tempname, $folder)) {
                    HotelStaff::addRoom($roomType, $features, $price, $filename);
                } else {
                    header("Location: ../hotelStaff_rooms.php?status=3");
                }
            } else {
                header("Location: ../hotelStaff_rooms.php?status=2");
            }
        } else {
            header("Location: ../hotelStaff_rooms.php?status=1");
        }
    } else {
        header("Location: ../hotelStaff_dashboard.php");
    }
} elseif ($_SERVER['REQUEST_METHOD'] === "GET") {
    if (isset($_GET['action']) && isset($_GET['target'])) {
        if ($_GET['action'] == "delete") {
            if (isset($_GET['facId'])) {
                $facId = $_GET['facId'];
                HotelStaff::deleteFacility($facId);
            } elseif (isset($_GET['roomId'])) {
                $roomId = $_GET['roomId'];
                HotelStaff::deleteRoom($roomId);
            }
        } elseif ($_GET['action'] == "cancel") {
            $resId = $_GET['resId'];
            HotelStaff::cancelReservation($resId);
        } elseif ($_GET['action'] == "approve") {
            $resId = $_GET['resId'];
            HotelStaff::approveReservation($resId);
        }
    } else {
        header("Location: ../hotelStaff_dashboard.php");
    }
} else {
    header("Location: ../hotelStaff_dashboard.php");
}