<?php
session_start();

use classes\User;
use classes\Admin;

require_once '../classes/User.php';
require_once '../classes/Admin.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['adminAddUser'])) {
        if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password_repeat']) && isset($_POST['role'])) {
            if ($_POST['password'] == $_POST['password_repeat']) {
                $username = strip_tags($_POST['username']);
                $hashedPass = password_hash(strip_tags($_POST['password']), PASSWORD_BCRYPT);
                $role = $_POST['role'];

                $admin = new Admin($username, $hashedPass, $role);
                $admin->addNewUser();
            } else {
                header("Location: ../admin_users.php?status=2");
            }
        } else {
            header("Location: ../admin_users.php?status=1");
        }
    } else {
        header("Location: ../admin_dashboard.php");
    }
} elseif($_SERVER['REQUEST_METHOD'] === "GET"){
    if(isset($_GET['action']) && isset($_GET['target']) && isset($_GET['userId'])){
        $userId = $_GET['userId'];

        Admin::deleteUser($userId);
    }
    else {
        header("Location: ../admin_users.php");
    }
} else {
    header("Location: ../admin_dashboard.php");
}