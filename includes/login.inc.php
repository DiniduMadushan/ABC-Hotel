<?php
session_start();

use classes\User;

require_once '../classes/User.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['submit_login'])) {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = strip_tags($_POST['username']);
            $password = strip_tags($_POST['password']);

            $user = new User($username, $password);
            $user->login();
        } else {
            header("Location: ../login.php?status=1");
        }
    } else {
        header("Location: ../login.php");
    }
} else {
    header("Location: ../login.php");
}