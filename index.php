<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Home</title>
        <link rel="icon" href="assets/img/icon.png" type="image/x-icon" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/Contact-Details-icons.css" />
        <script src="https://kit.fontawesome.com/79271f9696.js" crossorigin="anonymous"></script>
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
        <!--nav bar-->
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
                            <a id="anchor1" class="nav-link active" data-bss-hover-animate="pulse" href="index.php">Home</a>
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
        <!--header-->
        <header>
            <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" data-bs-interval="4000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100 d-block" src="assets/img/Home_images/wetbury-index-banner.jpg" alt="Slide Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 d-block" src="assets/img/Home_images/ezgif-4-38c8cb546f.jpg" alt="Slide Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 d-block" src="assets/img/Home_images/ezgif.com-webp-to-jpg.jpg" alt="Slide Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 d-block" src="assets/img/Home_images/aerial-view-amangalla-galle-sri-lanka.jpg" alt="Slide Image">
                    </div>
                </div>
                <div>
                    <a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#carousel-1" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carousel-1" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#carousel-1" data-bs-slide-to="3"></button>
                </div>
            </div>
        </header>
        <!--welcome part-->
        <section class="text-center bg-light features-icons text-dark" style="padding-top: 90px;padding-bottom: 90px;">
            <div class="container">
                <div>
                    <h1>Welcome to ABC Hotel</h1>
                    <p style="font-size: 25px;padding-top: 10px;">Where exceptional hospitality and comfort await you.</p>
                </div>
            </div>
        </section>
        <!--Icon-->
        <div style="background: rgba(195,191,191,0.68);">
            <div style="background: rgba(130,26,132,0.65);position: relative;">
                <div>
                    <br>
                    <p style="text-align: center;font-size: 19px;color: var(--bs-body-bg);font-weight: bold;">Why Book With Us</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="icon-box text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-clock-history text-light" viewBox="0 0 16 16">
                                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                </svg>
                                <p class="text-light">Early check-in or Late check-out</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-box text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-currency-dollar text-light" viewBox="0 0 16 16">
                                    <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                </svg>
                                <p class="text-light"> cheapest price</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-box text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-cash-coin text-light" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                                </svg>
                                <p class="text-light">Best Rate</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-box text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-bookmark-star-fill text-light" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z" />
                                </svg>
                                <p class="text-light">Iconic Place</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--we are-->
        <section class="showcase text-dark">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col-md-6 col-lg-6" style="padding-left: 12px;padding-right: 0px;">
                        <div>
                            <h1>We are...</h1>
                            <p style="text-align: justify;font-size: 20px;margin-bottom: 29px;height: 180px;width: 455px;"> Discover a haven of relaxation and elegance in the heart of Baddula. Whether you're here for a leisurely vacation, a business trip, or a special occasion, our dedicated team is committed to providing you with unparalleled service and creating memories that will last a lifetime.</p>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-left: 0px;">
                        <div class="card">
                            <img src="assets/img/Home_images/635x400-career-05.jpg" class="img-fluid card-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--rooms and facilities-->
        <br>
        <section class="text-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <img src="assets/img/Home_images/tea-heights-1.jpg" class="card-img-top" alt="Image 1">
                            <div class="card-body">
                                <h5 class="card-title">Rooms</h5>
                                <a href="rooms.php" class="btn btn-primary">More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <img src="assets/img/Home_images/hotel facilities.jpg" class="card-img-top" alt="Image 2">
                            <div class="card-body">
                                <h5 class="card-title">Facilities</h5>
                                <a href="facilities.php" class="btn btn-primary">More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--middle section-->
        <section class="py-4 py-xl-5">
            <div class="container">
                <div class="border rounded border-0 d-flex flex-column justify-content-center align-items-center p-4 py-5" style="background: linear-gradient(rgba(0,123,255,0.2), rgba(0,123,255,0.2)), url(assets/img/Home_images/resize-16888739199125691441016344dunkeldpoolhatton3000x1000.jpg) center / cover;height: 500px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;padding-top: 0px;">
                    <div class="row">
                        <div class="col-xl-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                            <div>
                                <h1 class="text-uppercase fw-bold mb-3 text-light">Dive into Infinite Bliss</h1>
                                <p class="text-light" style="font-size: 18px;"> Immerse Yourself in Our Breathtaking Infinity Pool</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container text-dark">
            <div class="text-center">
                <h2>Things to Do</h2>
                <hr style="border-width: 2px;" />
            </div>
        </div>
        <!--image carousel-->
        <div class="container text-dark">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="margin-top: 50px;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="carousel-image">
                                    <img src="assets/img/Home_images/narangala.jpg" alt="Image 1" class="img-fluid">
                                    <div class="carousel-text">
                                        <h3>Narangala</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="carousel-image">
                                    <img src="assets/img/Home_images/mutiyanganaya.jpg" alt="Image 2" class="img-fluid">
                                    <div class="carousel-text">
                                        <h3>Muthiyanganaya Temple</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="carousel-image">
                                    <img src="assets/img/Home_images/dunhida water fall.jpg" alt="Image 3" class="img-fluid">
                                    <div class="carousel-text">
                                        <h3>Dunhinda falls</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="carousel-image">
                                    <img src="assets/img/Home_images/nine arch.jpg" alt="Image 4" class="img-fluid">
                                    <div class="carousel-text">
                                        <h3>Nine Arch </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="carousel-image">
                                    <img src="assets/img/Home_images/ella rock.jpg" alt="Image 5" class="img-fluid">
                                    <div class="carousel-text">
                                        <h3>Ella Rock</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="carousel-image">
                                    <img src="assets/img/Home_images/Madulsima-1.jpg" alt="Image 6" class="img-fluid">
                                    <div class="carousel-text">
                                        <h3>Madulsima</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <footer class="text-center bg-dark" style="margin-top: 50px;">
            <div class="container text-white py-4 py-lg-5">
                <p class=" text-light">Copyright © 2023 ABC Hotel</p>
            </div>
        </footer>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <a class="border rounded d-inline scroll-to-top" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </body>
</html>