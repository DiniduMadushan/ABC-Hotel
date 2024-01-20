<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <link rel="icon" href="assets/img/icon.png" type="image/x-icon" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/Contact-Details-icons.css" />
        <script src="https://kit.fontawesome.com/79271f9696.js" crossorigin="anonymous"></script>
        <title>Register</title>
        <style>
            /* Hide scrollbar for Chrome, Safari and Opera */
            body::-webkit-scrollbar {
                display: none;
            }

            /* Hide scrollbar for IE, Edge and Firefox */
            body {
                -ms-overflow-style: none;
                /* IE and Edge */
                scrollbar-width: none;
                /* Firefox */
            }
            
            section{
                min-height: 508px;
            }
        </style>
    </head>
    <body class="bg-primary bg-gradient">
        <nav class="navbar navbar-dark navbar-expand-md bg-dark py-3">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon">
                        <img src="assets/img/icon.png" class="img-thumbnail">
                    </span>
                    <span>ABC Hotel</span>
                </a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-5">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a id="anchor1" class="nav-link" data-bss-hover-animate="pulse" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="anchor2" class="nav-link" data-bss-hover-animate="pulse" href="rooms.php">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a id="anchor3" class="nav-link" data-bss-hover-animate="pulse" href="facilities.php">Facilities</a>
                        </li>
                        <li class="nav-item">
                            <a id="anchor4" class="nav-link" data-bss-hover-animate="pulse" href="reservations.php">Reservations</a>
                        </li>
                        <li class="nav-item">
                            <a id="anchor5" class="nav-link" data-bss-hover-animate="pulse" href="contact_us.php">Contact Us</a>
                        </li>
                    </ul>
                    <a class="btn btn-primary ms-md-2" role="button" data-bss-hover-animate="pulse" href="login.php">Log in</a>
                </div>
            </div>
        </nav>
        <section>
        <div class="container">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets/img/login.jpg&quot;);"></div>
                        </div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-4">Create an Account!</h4>
                                    <h6 class="text-danger">
                                        <?php
                                        if(isset($_GET['status'])){
                                            if($_GET['status'] == 1){
                                                echo 'Please fill all fields!';
                                            } elseif($_GET['status'] == 2){
                                                echo 'Please enter a valid email address!';
                                            } elseif($_GET['status'] == 3){
                                                echo 'Password and Confirm Password does not match!';
                                            } elseif($_GET['status'] == 4){
                                                echo 'Username already taken!';
                                            } elseif($_GET['status'] == 5){
                                                echo 'An error occured!';
                                            } elseif($_GET['status'] == 6){
                                                echo 'Registration success. Please Login!';
                                            }
                                        }
                                        ?>
                                    </h6>
                                    <br>
                                </div>
                                <form class="user" action="includes/register.inc.php" method="POST">
                                    <div class="row mb-3">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input class="form-control form-control-user" type="text" placeholder="First Name" name="fname" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control form-control-user" type="text" placeholder="Last Name" name="lname" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input class="form-control form-control-user" type="email" placeholder="Email" name="email" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control form-control-user" type="tel" placeholder="Telephone" name="tel" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input class="form-control form-control-user" type="text" placeholder="Username" name="username" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input class="form-control form-control-user" type="password" placeholder="Password" name="password" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control form-control-user" type="password" placeholder="Confirm Password" name="password_repeat" required>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary d-block btn-user w-100" type="submit" name="submit_register">Register Account</button>
                                    <hr>
                                </form>
                                <div class="text-center">
                                    <a class="small" href="login.php">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <footer class="text-center bg-dark">
            <div class="container text-white py-4 py-lg-5">
                <p class="text-light mb-0">Copyright © 2023 ABC Hotel</p>
            </div>
        </footer>
    </body>
</html>