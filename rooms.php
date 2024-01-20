<?php

require './Classes/Room.php';
require './Classes/Reviews.php';

use Classes\Room;
use Classes\Reviews;

$rooms= Room::showRoomDetails();
$reviews= Reviews::showReviews();
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="icon" href="assets/img/icon.png" type="image/x-icon" />
        <title>Rooms</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/CSS_for_Room_carousel.css">
        <link rel="stylesheet" href="assets/css/Contact-Details-icons.css" />
        <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/styles-reviews.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="assets/css/Floating-button-room.css"/>
        <style>
            .zoom {
                transition: 1s ease;
            }

            .zoom:hover {
                -webkit-transform: scale(1.05);
                -ms-transform: scale(1.05);
                transform: scale(1.05);
                transition: 1s ease;
            }

            .para {
                text-align: justify;
            }
        </style>
    </head>
    <body id="page-top">
        
        <!-- navigation bar -->
        
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
                            <a id="anchor2" class="nav-link active" data-bss-hover-animate="pulse" href="rooms.php">Rooms</a>
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
        
         <!-- floating button -->
        <div class="floating-button">
            <span title="Add a new review"><a href="RatingForm.php" target="_blank"><i class="fa-regular fa-comments fa-fade"></i></a></span>
        </div>

        <!-- hero carousel -->
        
        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="room 1"></button>
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="room 2"></button>
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="room 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active c-item">
                    <img src="assets/img/Room_images/carousel1.jpg" class="d-block w-100 c-img" alt="room 1">
                    <div class="carousel-caption top-0 mt-4">
                        <h1 class="text-uppercase fw-bold mb-3">Explore<br>Our luxurious Rooms</h1>
                        <div style="margin-top: 180px">
                            <a href="#list" class="btn btn-primary">show more</a>
                        </div>

                    </div>
                </div>
                <div class="carousel-item  c-item">
                    <img src="assets/img/Room_images/carousel2.jpg" class="d-block w-100 c-img" alt="room 1">
                    <div class="carousel-caption top-0 mt-4">
                        <h1 class="text-uppercase fw-bold mb-3">Explore<br>Our luxurious Rooms</h1>
                        <div style="margin-top: 180px">
                            <a href="#list" class="btn btn-primary">show more</a>
                        </div>

                    </div>
                </div>
                <div class="carousel-item  c-item">
                    <img src="assets/img/Room_images/carousel3.jpg" class="d-block w-100 c-img" alt="room 1">
                    <div class="carousel-caption top-0 mt-4">
                        <h1 class="text-uppercase fw-bold mb-3">Explore<br>Our luxurious Rooms</h1>
                        <div style="margin-top: 180px">
                            <a href="#list" class="btn btn-primary">show more</a>
                        </div>

                    </div>
                </div>
                <div class="carousel-item  c-item">
                    <img src="assets/img/Room_images/carousel3.jpg" class="d-block w-100 c-img" alt="room 1">
                    <div class="carousel-caption top-0 mt-4">
                        <h1 class="text-uppercase fw-bold mb-3">Explore<br>Our luxurious Rooms</h1>
                        <div style="margin-top: 180px">
                            <a href="#list" class="btn btn-primary">show more</a>
                        </div>

                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script id="bs-live-reload" data-sseport="53733" data-lastchange="1690915260460" src="/js/livereload.js"></script>
        
        <!-- Available rooms -->
        
        <div id="list" class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h1 class="text-uppercase fw-bold mb-3">Our luxurious Rooms</h1>
                    <p class="lead" style="margin-bottom:40px;color: #a103fc;font-size: 20px">Explore our luxurious and comfortable rooms for your stay.</p>
                </div>
            </div>
        </div>

        <div class="container py-4 py-xl-5">
            <div  class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                <?php
                        foreach ($rooms as $room) {
                            ?>
                            <div class="col zoom">
                                <div class="card">
                                    <img class="card-img-top w-100 d-block fit-cover" style="height: 300px;" src="assets/img/Room_images/<?=$room->getRoomImage(); ?>">
                                    <div class="card-body p-4">
                                        <h4 class="card-title"><?= $room->getRoomType(); ?></h4>
                                        <p class="card-text para">
                                            <span style="color: red">Features:</span> <?=$room->getRoomFeatures();?></p>

                                        <div>
                                            <p class="fw-bold mb-0">Price:</p>
                                            <p class="text-muted mb-0">Rs.<?=$room->getRoomPrice();?>/Night</p>
                                            <div class="text-center">
                                                <a type="button" class="btn btn-primary" href="reservations.php">Book now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                   
                ?>





            </div>

        </div>

        <hr>
        
        <!-- review carousel -->
        
        <section class="section-review-main">
            <div class="container">
                <h1 class="section-review-header">Client Reviews<span>what our clients say about their experience</span></h1>
                <div class="testimonials">

                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="single-review-item" style=" border-radius: 25px;">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="review-profile">
                                                <div class="profile-img-area">
                                                    <img src="assets/img/rating/IMG_20220820_101255.jpg" alt="user1">
                                                </div>
                                                <div>
                                                    <h5>Dinidu Madushan</h5>
                                                    <h6>@dinidumadushan</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 review-head">
                                            <h4 class="room_type">Room type:<span style="color: violet"> Super deluxe</span></h4>
                                            <div class="stars" data-rating="5"></div>
                                            <div class="review-content">
                                                <p><span><i class="fa fa-quote-left"></i></span>Hi everyone.i just wanted to say that this Hotel is marvelous.
                                                    outstanding facilities.security is fabulous.</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                           <?php
                           
                            foreach ($reviews as $review){
                            ?>   
                            
                            <div class="carousel-item">
                                <div class="single-review-item" style=" border-radius: 25px;">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="review-profile">
                                                <div class="profile-img-area">
                                                    <img src="assets/img/rating/anonymousUser.jpg" alt="user">
                                                </div>
                                                <div>
                                                    <h5>Anonymous</h5>
                                                    <h6>@anonymous</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 review-head">
                                            <h4 class="room_type">Room type: <span style="color: violet"> <?=$review->getRoomName(); ?></span></h4>
                                            <div class="stars" data-rating="<?=$review->getRating();?>"> </div>
                                            <div class="review-content">
                                                <p><span><i class="fa fa-quote-left"></i></span>
                                                    <?=$review->getReview(); ?>
                                                 </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                      
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    
                </div>
                
            </div>
            <div>
                
            </div>
            
        </section>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <hr>
        
        <!-- Addition facilities -->
        
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Additional Room Facilities</h2>
                    <p class="w-lg-50">We offer the following facilities with each and every room.</p>
                </div>
            </div>
            <div class="row gy-3 row-cols-1 row-cols-md-2 row-cols-xl-4">
                <div class="col">
                    <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                        <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg">
                            <i class="fa-solid fa-wifi fa-beat-fade"></i>
                        </div>
                        <div class="px-3">
                            <h4>Free Wifi</h4>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                        <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg">
                            <i class="fa-solid fa-vault"></i>
                        </div>
                        <div class="px-3">
                            <h4>Safety lockers</h4>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                        <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg">
                            <i class="fas fa-luggage-cart"></i>
                        </div>
                        <div class="px-3">
                            <h4>luggage cart</h4>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                        <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg">
                            <i class="fas fa-suitcase"></i>
                        </div>
                        <div class="px-3">
                            <h4>Suitcase</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <footer class="text-center bg-dark">
            <div class="container text-white py-4 py-lg-5">
                <p>Copyright © 2023 ABC Hotel</p>
            </div>
        </footer>
    </body>
</html>