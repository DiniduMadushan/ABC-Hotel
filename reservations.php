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
        <title>Reservations</title>
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
                min-height: 539px;
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
                            <a id="anchor4" class="nav-link active" data-bss-hover-animate="pulse" href="reservations.php">Reservations</a>
                        </li>
                        <li class="nav-item">
                            <a id="anchor5" class="nav-link" data-bss-hover-animate="pulse" href="contact_us.php">Contact Us</a>
                        </li>
                    </ul>
                    <a class="btn btn-primary ms-md-2" role="button" data-bss-hover-animate="pulse" href="login.php">Log in</a>
                </div>
            </div>
        </nav>
        <section class="position-relative py-4 py-xl-5">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                        <div class="card mb-5">
                            <div class="card-body p-sm-5">
                                <h2 class="text-center text-dark mb-4">Make Your Reservation!</h2>
                                <form action="classes/Reservation.php" method="post">
                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-outline">
                                                <select class="form-select" aria-label="Default select example" name="room" required>
                                                    <option value="0" disabled selected>Select Room</option>
                                                    <option value="Dark Moon">Dark Moon</option>
                                                    <option value="Junior Suite">Junior Suite</option>
                                                    <option value="Super Deluxe">Super Deluxe</option>
                                                    <option value="Heaven Family">Heaven Family</option>
                                                    <option value="Virginia Standard">Virginia Standard</option>
                                                    <option value="Kingsburry">Kingsburry</option>
                                                    <option value="Vip Family">Vip Family</option>
                                                    <option value="Family Biggest">Family Biggest</option>
                                                    <option value="Extreme Delux">Extreme Delux</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline">
                                                <select class="form-select" aria-label="Default select example" name="facility" required>
                                                    <option value="0" disabled selected>Select Facility</option>
                                                    <option value="Swimming Pool">Swimming Pool</option>
                                                    <option value="Restaurant">Restaurant</option>
                                                    <option value="Spa">Spa</option>
                                                    <option value="Gym">Gym</option>
                                                    <option value="Games Room">Games Room</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-outline form-white mb-4">
										<input type="date" id="date" class="form-control form-control-lg" name="date" required />
									</div>
                                        <button class="btn btn-primary d-block w-100" type="submit">Reserve</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <footer class="text-center bg-dark">
            <div class="container text-white py-4 py-lg-5">
                <p>Copyright © 2023 ABC Hotel</p>
            </div>
        </footer>
    </body>
</html>