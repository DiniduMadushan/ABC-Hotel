<?php
session_start();

use classes\User;
use classes\Admin;

require_once 'classes/User.php';
require_once 'classes/Admin.php';

if (!isset($_SESSION['login']) && !isset($_SESSION['role'])) {
    header("Location: index.php");
} else if (isset($_SESSION['login']) && $_SESSION['role'] != "Admin") {
    header("Location: index.php");
}

if(isset($_GET['status'])){
    if($_GET['status'] == 1){
        echo '<script>alert("Please fill all fields!");</script>';
    } elseif($_GET['status'] == 2){
        echo '<script>alert("Password and Confirm Password does not match!");</script>';
    } elseif($_GET['status'] == 3){
        echo '<script>alert("Username already taken!");</script>';
    } elseif($_GET['status'] == 4){
        echo '<script>alert("An error occured!");</script>';
    } elseif($_GET['status'] == 5){
        echo '<script>alert("User registration successfull!");</script>';
    } elseif($_GET['status'] == 6){
        echo '<script>alert("An error occured!");</script>';
    } elseif($_GET['status'] == 7){
        echo '<script>alert("User deletion successfull!");</script>';
    }
}

$rs1 = Admin::getGuestUsers();
if (isset($_GET['page1'])) {
    $page1 = $_GET['page1'];
} else {
    $page1 = 1;
}
$results_per_page1 = 10;
if (count($rs1) < 10) {
    $results_per_page1 = count($rs1);
}
if (count($rs1) == 0) {
    $results_per_page1 = 1;
}
$page_first_result1 = ($page1 - 1) * $results_per_page1;
$number_of_result1 = count($rs1);
$number_of_page1 = ceil($number_of_result1 / $results_per_page1);
if ($page1 == $number_of_page1) {
    $results_per_page1 = count($rs1) - $page_first_result1;
}
if (isset($_GET['page1'])) {
    if ($_GET['page1'] < 1) {
        header('Location: admin_users.php?page1=1');
    } else if ($_GET['page1'] > $number_of_page1) {
        header('Location: admin_users.php?page1=' . $number_of_page1);
    }
}

$rs2 = Admin::getOtherUsers();
if (isset($_GET['page2'])) {
    $page2 = $_GET['page2'];
} else {
    $page2 = 1;
}
$results_per_page2 = 10;
if (count($rs2) < 10) {
    $results_per_page2 = count($rs2);
}
if (count($rs2) == 0) {
    $results_per_page2 = 1;
}
$page_first_result2 = ($page2 - 1) * $results_per_page2;
$number_of_result2 = count($rs2);
$number_of_page2 = ceil($number_of_result2 / $results_per_page2);
if ($page2 == $number_of_page2) {
    $results_per_page2 = count($rs2) - $page_first_result2;
}
if (isset($_GET['page2'])) {
    if ($_GET['page2'] < 1) {
        header('Location: admin_users.php?page2=1');
    } else if ($_GET['page2'] > $number_of_page2) {
        header('Location: admin_users.php?page2=' . $number_of_page1);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <title>Admin Panel</title>
        <link rel="icon" href="assets/img/icon.png" type="image/x-icon" />
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" />
        <script src="https://kit.fontawesome.com/79271f9696.js" crossorigin="anonymous"></script>
        <style>
            /* Hide scrollbar for Chrome, Safari and Opera */
            .modal-body::-webkit-scrollbar,
            body::-webkit-scrollbar {
                display: none;
            }

            /* Hide scrollbar for IE, Edge and Firefox */
            .modal-body,
            body {
                -ms-overflow-style: none;
                /* IE and Edge */
                scrollbar-width: none;
                /* Firefox */
            }
        </style>
    </head>
    <body id="page-top">
        <div id="wrapper">
            <nav id="main-nav" class="navbar bg-dark align-items-start sidebar sidebar-dark accordion p-0" style="padding-bottom: 0px;">
                <div class="container-fluid d-flex flex-column p-0">
                    <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                        <div class="sidebar-brand-text mx-3">
                            <span>Administrator</span>
                        </div>
                    </a>
                    <hr class="sidebar-divider my-0" />
                    <ul class="navbar-nav text-light" id="accordionSidebar">
                        <li class="nav-item">
                            <a id="anchor1" class="nav-link" href="admin_dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="anchor2" class="nav-link active" href="admin_users.php">
                                <i class="fas fa-user"></i>
                                <span>Users</span>
                            </a>
                        </li>
                    </ul>
                    <a class="btn btn-primary btn-md" role="button" data-bss-hover-animate="pulse" href="includes/logout.inc.php">Log Out</a>
                    <hr class="sidebar-divider my-2" />
                    <div class="text-center d-none d-md-inline">
                        <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
                    </div>
                </div>
            </nav>
            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                    <nav class="navbar navbar-light navbar-expand-md bg-white shadow mb-4 py-3 static-top">
                        <div class="container-fluid">
                            <button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button">
                                <i class="fas fa-bars"></i>
                            </button>
                            <h4 class="d-none d-md-block">ABC HOTEL</h4>
                            <h4 class="align-self-right">Hello Admin!</h4>
                        </div>
                    </nav>
                    <div class="container-fluid">
                        <h3 class="text-dark mb-4">Guest Account Details</h3>
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                    <table class="table my-0" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <b>#</b>
                                                </th>
                                                <th>Username</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Telephone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            if (count($rs1) > 0) {
                                                for ($i = $page_first_result1; $i < $page_first_result1 + $results_per_page1; $i++) {
                                                    $row1 = $rs1[$i];
                                            ?>
                                                    <tr>
                                                        <td><b><?php echo $i + 1; ?></b></td>
                                                        <td><?php echo $row1['Username']; ?></td>
                                                        <td><?php echo $row1['Fname']; ?></td>
                                                        <td><?php echo $row1['Lname']; ?></td>
                                                        <td><?php echo $row1['Tel']; ?></td>
                                                        <td><?php echo $row1['Email']; ?></td>
                                                        <td><a type="button" class="btn btn-danger" href="includes/admin.inc.php?action=delete&target=user&userId=<?php echo $row1['User_Id']; ?>" name="delete">Delete</a></td>
                                                    </tr>
                                            <?php
                                                }
                                            } else {
                                                echo '<tr>';
                                                echo '<td colspan="7">No data found</td>';
                                                echo '</tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing <?php echo $page_first_result1 + 1; ?> to <?php echo $page_first_result1 + $results_per_page1; ?> of <?php echo count($rs1); ?></p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" aria-label="Previous" href="admin_users.php?page1=<?php echo $page1 - 1; ?>">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                            <?php
                                            for ($i = 1; $i <= $number_of_page1; $i++) {
                                                if ($i == $page1) {
                                            ?>
                                                    <li class="page-item">
                                                        <a class="page-link active" href="admin_users.php?page1=<?php echo $i; ?>"><?php echo $i; ?></a>
                                                    </li>
                                                <?php
                                                } else {
                                                ?>
                                                    <li class="page-item">
                                                        <a class="page-link" href="admin_users.php?page1=<?php echo $i; ?>"><?php echo $i; ?></a>
                                                    </li>
                                            <?php
                                                }
                                            }
                                            ?>
                                            <li class="page-item">
                                                <a class="page-link" aria-label="Next" href="admin_users.php?page1=<?php echo $page1 + 1; ?>">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container-fluid">
                        <h3 class="text-dark mb-4">Other Account Details</h3>
                        <!-- Button trigger modal -->
                        <button class="btn btn-primary btn-md" type="submit" data-bs-toggle="modal" data-bs-target="#addNewUser" style="float: right;">Add New User</button>
                        </br>
                        </br>
                        <form action="includes/admin.inc.php" method="POST">
                            <!-- Modal -->
                            <div class="modal fade" id="addNewUser" tabindex="-1" aria-labelledby="addNewUserLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title h3" id="addNewUserLabel">Add User</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div id="modal-body" class="modal-body">
                                            <div class="form-outline form-white h5">
                                                <label class="form-label h5" for="username">Username</label>
                                                <br />
                                                <input type="text" class="form-control" id="username" name="username" required />
                                                <br />
                                                <label class="form-label h5" for="password">Password</label>
                                                <br />
                                                <input type="password" class="form-control" id="password" name="password" required />
                                                <br />
                                                <label class="form-label h5" for="password_repeat">Confirm Password</label>
                                                <br />
                                                <input type="password" class="form-control" id="password_repeat" name="password_repeat" required />
                                                <br />
                                                <select class="form-select" aria-label="Default select example" name="role">
                                                    <option value="Admin">Admin</option>
                                                    <option value="Hotel Staff">Hotel Staff</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="adminAddUser">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal end-->
                        </form>
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                    <table class="table my-0" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <b>#</b>
                                                </th>
                                                <th>Username</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if (count($rs2) > 0) {
                                            for ($i = $page_first_result2; $i < $page_first_result2 + $results_per_page2; $i++) {
                                                $row2 = $rs2[$i];
                                        ?>
                                                <tr>
                                                    <td><b><?php echo $i + 1;?></b></td>
                                                    <td><?php echo $row2['Username'];?></td>
                                                    <td><?php echo $row2['Role'];?></td>
                                                    <td><a type="button" class="btn btn-danger" href="includes/admin.inc.php?action=delete&target=user&userId=<?php echo $row2['User_Id']; ?>" name="delete">Delete</a></td>
                                                </tr>
                                        <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                            <td colspan="4">No data found</td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                            <div class="col-md-6 align-self-center">
                                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing <?php echo $page_first_result2 + 1; ?> to <?php echo $page_first_result2 + $results_per_page2; ?> of <?php echo count($rs2); ?></p>
                            </div>
                            <div class="col-md-6">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" aria-label="Previous" href="admin_users.php?page2=<?php echo $page2 - 1; ?>">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                        <?php
                                        for ($i = 1; $i <= $number_of_page2; $i++) {
                                            if ($i == $page2) {
                                        ?>
                                                <li class="page-item">
                                                    <a class="page-link active" href="admin_users.php?page2=<?php echo $i; ?>"><?php echo $i; ?></a>
                                                </li>
                                            <?php
                                            } else {
                                            ?>
                                                <li class="page-item">
                                                    <a class="page-link" href="admin_users.php?page2=<?php echo $i; ?>"><?php echo $i; ?></a>
                                                </li>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <li class="page-item">
                                            <a class="page-link" aria-label="Next" href="admin_users.php?page2=<?php echo $page2 + 1; ?>">
                                                <span aria-hidden="true">»</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="bg-white sticky-footer">
                    <a class="border rounded d-inline scroll-to-top" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>
                    <div class="container my-auto">
                        <div class="text-center my-auto copyright">
                            <span>Copyright © 2023 ABC Hotel</span>
                        </div>
                    </div>
                </footer>
                <a class="border rounded d-inline scroll-to-top" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>
                <script src="assets/bootstrap/js/bootstrap.min.js"></script>
                <script src="assets/js/theme.js"></script>
            </div>
        </div>
    </body>
</html>