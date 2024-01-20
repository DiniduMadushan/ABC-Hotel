<?php
require './classes/DbConnector.php';

use classes\DbConnector;

$dbcon = new DbConnector();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Facilities</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="assets/img/icon.png" type="image/x-icon" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/Contact-Details-icons.css" />
        <script src="https://kit.fontawesome.com/79271f9696.js" crossorigin="anonymous"></script>
        <style>
            .paras {
                text-align: justify;
                text-justify: inter-word;
            }

            .zoom {
                transition: 1s ease;
            }

            .zoom:hover {
                -webkit-transform: scale(1.1);
                -ms-transform: scale(1.1);
                transform: scale(1.1);
                transition: 1s ease;
            }

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

            .scroll-to-top {
                position: fixed;
                right: 1rem;
                bottom: 1rem;
                display: none;
                width: 2.75rem;
                height: 2.75rem;
                text-align: center;
                color: #fff;
                background: rgba(90, 92, 105, .5);
                line-height: 46px
            }

            .scroll-to-top:focus,
            .scroll-to-top:hover {
                color: #fff
            }

            .scroll-to-top:hover {
                background: #5a5c69
            }

            .scroll-to-top i {
                font-weight: 800
            }
        </style>
    </head>
    <body id="page-top">
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
                            <a id="anchor3" class="nav-link active" data-bss-hover-animate="pulse" href="facilities.php">Facilities</a>
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
        <div class="container py-4 py-xl-5 text-center">
            <h1 class="w-lg-50 text-info">-Explore Our Facilities-</h1>
        </div>

        <?php
        try {
            $con = $dbcon->connect();
            $query = "SELECT * FROM facility";
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);
            $i = 1;

            foreach ($rs as $use) {
                ?>
                <div class="container py-2 py-xl-3 zoom">
                    <div class="row gy-4 gy-md-0">
                        <div class="col-md-6">
                            <div class="p-xl-5 m-xl-5">
                                <img class="rounded img-fluid w-100 fit-cover " style="min-height: 300px;" src="assets/img/Facilities_images/<?php echo $use->Fac_Image; ?>">
                            </div>
                        </div>
                        <div class="col-md-6 d-md-flex align-items-md-center">
                            <div style="max-width: 350px;">
                                <h2 class="text-uppercase fw-bold text-secondary">
                                    <?php echo $use->Fac_Name; ?>
                                </h2>
                                <br>
                                <div class="paras">
                                    <p>
                                        <?php echo $use->Fac_Description; ?>
                                    </p>
                                    <p>
                                        <span style="color: red">Features:</span> 
                                        <?php echo $use->Fac_Features; ?>
                                    </p>
                                    <br>
                                </div>
                                <a type="button" class="btn btn-primary" href="reservations.php">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $i++;
            }
        } catch (PDOException $exc) {
            echo "" . $exc->getMessage();
        }
        ?>

        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <footer class="text-center bg-dark">
            <div class="container text-white py-4 py-lg-5">
                <p>Copyright © 2023 ABC Hotel</p>
            </div>
        </footer>
    </body>
</html>