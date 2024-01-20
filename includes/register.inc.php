<?php
session_start();

use classes\User;
use classes\Guest;

require_once '../classes/User.php';
require_once '../classes/Guest.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['submit_register'])) {
        if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['tel']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password_repeat'])) {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                if ($_POST['password'] == $_POST['password_repeat']) {
                    $fname = strip_tags($_POST['fname']);
                    $lname = strip_tags($_POST['lname']);
                    $email = strip_tags($_POST['email']);
                    $tel = strip_tags($_POST['tel']);
                    $username = strip_tags($_POST['username']);
                    $password = strip_tags($_POST['password']);
                    $hashedPass = password_hash($password, PASSWORD_BCRYPT);
                    $role = "Guest";

                    $guest = new Guest($username, $hashedPass, $role, $fname, $lname, $email, $tel);
                    $guest->register();
                } else {
                    header("Location: ../register.php?status=3");
                }
            } else {
                header("Location: ../register.php?status=2");
            }
        } else {
            header("Location: ../register.php?status=1");
        }
    } else {
        header("Location: ../register.php");
    }
} else {
    header("Location: ../register.php");
}