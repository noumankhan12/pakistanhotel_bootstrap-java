<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL</title>
        <?php require('includes/links.php') ?>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    
    <style>
        .fixed-img {
            width: 300px;
            height: 400px;
        }



        .availibilty-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;

        }
    </style>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-3 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">PAKISTAN HOTEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="rooms.php">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="facilities.php">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
                <div class="d-flex">

                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-4 me-3" data-bs-toggle="modal"
                        data-bs-target="#LoginModal">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal"
                        data-bs-target="#RegisterModal">
                        Registration
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Swiper -->
    <div class="container-fluid px-lg-4 mt-4">

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" class="fixed-img w-100 d-flex" />
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" class="fixed-img w-100 d-flex" />
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" class="fixed-img w-100 d-flex" />
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" class="fixed-img w-100 d-flex" />
                </div>
            </div>

        </div>
    </div>


    <!-- availibilty form -->
    <div class="container availibilty-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">CHECK BOOKING AVAILABLITY</h5>

                <div class="row align-items-end">
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight :500">Check-in</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight :500">Check-out</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500">Adult</label>
                        <select class="form-select" aria-label="Default select example">

                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                    </div>
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight: 500;">Children</label>
                        <select class="form-select" aria-label="Default select example">

                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                    </div>
                    <div class="col-lg-1 mb-lg-3 mt-2">
                        <button class="btn  shadow-none custom-bg">Submit</button>
                    </div>




                </div>
            </div>
        </div>
    </div>



    <!-- rooms card -->
    <h2 class="mt-4 pt-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">

            <div class="col-lg-4 md-6 my-3">
                <div class="card border-0 shadow" style="max: width 350px; margin: auto;">
                    <img src="images/rooms/1.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Rooms</h5>
                        <h6 class="mb-4">RS 200 Per Night</h6>

                        <div class="features mb-4">
                            <h6 class="mb-1">FEATURES</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                2 ROOMS
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                2 BATHROOMS
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                1 BALCONY
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                3 SOFA
                            </span>
                        </div>

                        <div class="facilities mb-4">
                            <h6 class="mb-1">FACILITIES</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                HEATER
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                WIFI
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                TELEVISION
                            </span>
                        </div>

                        <div class="facilities mb-4">
                            <h6 class="mb-1">GUESTS</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                4 Childrens
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                4 Adults
                        </div>

                        <div class="RATINGS mb-4">
                            <h6 class="mb-1">RATING</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Detail</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 md-6 my-3">
                <div class="card border-0 shadow" style="max: width 350px; margin: auto;">
                    <img src="images/rooms/2.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Rooms</h5>
                        <h6 class="mb-4">RS 200 Per Night</h6>

                        <div class="features mb-4">
                            <h6 class="mb-1">FEATURES</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                2 ROOMS
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                2 BATHROOMS
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                1 BALCONY
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                3 SOFA
                            </span>
                        </div>

                        <div class="facilities mb-4">
                            <h6 class="mb-1">FACILITIES</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                HEATER
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                WIFI
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                TELEVISION
                            </span>
                        </div>

                        <div class="facilities mb-4">
                            <h6 class="mb-1">GUESTS</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                4 Childrens
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                4 Adults
                        </div>

                        <div class="RATINGS mb-4">
                            <h6 class="mb-1">RATING</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Detail</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 md-6 my-3">
                <div class="card border-0 shadow" style="max: width 350px; margin: auto;">
                    <img src="images/rooms/2.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Rooms</h5>
                        <h6 class="mb-4">RS 200 Per Night</h6>

                        <div class="features mb-4">
                            <h6 class="mb-1">FEATURES</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                2 ROOMS
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                2 BATHROOMS
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                1 BALCONY
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                3 SOFA
                            </span>
                        </div>

                        <div class="facilities mb-4">
                            <h6 class="mb-1">FACILITIES</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                HEATER
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                WIFI
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                TELEVISION
                            </span>
                        </div>

                        <div class="facilities mb-4">
                            <h6 class="mb-1">GUESTS</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                4 Childrens
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                4 Adults
                        </div>

                        <div class="RATINGS mb-4">
                            <h6 class="mb-1">RATING</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Detail</a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>

            </div>
        </div>
    </div>

    <!-- features -->
    <h2 class="mt-4 pt-4 text-center fw-bold h-font">OUR FEATURES</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/1.png" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/1.png" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/1.png" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/1.png" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/1.png" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Facilities</a>
            </div>
        </div>
    </div>


    <!-- testimonials -->
    <h2 class="mt-4 pt-4 text-center fw-bold h-font">TESTIMONIALS</h2>
    <div class="container mt-5">
        <div class="swiper swiper-testimonial">
            <div class="swiper-wrapper">

                <div class="swiper-slide bg-white mb-3">

                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/features/1.png" width="30px">
                        <h6 class="m-0 ms-2">Random User 1</h6>
                    </div>

                    <p>
                        hello whhwowo d shshshsh msmshshsnej
                        jhdjahsdkjhkaade dsd cc x c dsd dfdfd
                        msansamdnsnd we retrt yhyy dfddd
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>

                </div>

                <div class="swiper-slide bg-white mb-3">

                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/features/1.png" width="30px">
                        <h6 class="m-0 ms-2">Random User 1</h6>
                    </div>

                    <p>
                        hello whhwowo d shshshsh msmshshsnej
                        jhdjahsdkjhkaade dsd cc x c dsd dfdfd
                        msansamdnsnd we retrt yhyy dfddd
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>

                </div>

                <div class="swiper-slide bg-white mb-3">

                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/features/1.png" width="30px">
                        <h6 class="m-0 ms-2">Random User 1</h6>
                    </div>

                    <p>
                        hello whhwowo d shshshsh msmshshsnej
                        jhdjahsdkjhkaade dsd cc x c dsd dfdfd
                        msansamdnsnd we retrt yhyy dfddd
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>

                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">Know More</a>
        </div>
    
    </div>


    <!-- Reach Us -->
    <h2 class="mt-4 pt-4 text-center fw-bold h-font">Reach Us</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320"
                    src=https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13286.90845932279!2d73.0677697!3d33.6383169!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df95208fc1e9af%3A0x84e22316b1045594!2sCheezious!5e0!3m2!1sen!2s!4v1675539463060!5m2!1sen!2s"
                    style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>CALL US</h5>
                    <a href="tel 03151566195" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>03151566195</a>
                    <br>
                    <a href="tel 03151566195" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>03151566195</a>
                </div>



                <div class="bg-white p-4 rounded mb-4">
                    <h4>Follow Us</h4>
                    <a href="#" class="d-inline-block mb-2">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter me-1">Twitter</i>
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-2">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1">FaceBook</i>
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-2">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram">Instagram</i>
                        </span>
                    </a>
                </div>

            </div>



        </div>
    </div>

    <!-- footer -->
      <?php  require('includes/footer.php'); ?>


    <!-- Modal -->
    <div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i>User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control shadow-none">
                                <label for="exampleInputEmail1" class="form-label">Email password</label>
                                <input type="password" class="form-control shadow-none mb-2">
                                <div class="d-flex  align-items-center justify-content-between mb-2">
                                    <button class="btn btn-dark shadow-none">LOGIN</button>
                                    <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forget
                                        Password?</a>
                                </div>

                            </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>


                    <div class="modal-body">
                        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                            Note:Your details must match with your id (that is idcard,passpword etc)</span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Picture</label>
                                    <input type="file" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 p-0 mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control shadow-none" rows="1"></textarea>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-dark shadow-none">REGISTER</button>
                                </div>
                            </div>

                        </div>
                </form>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }

        });

        var swiper = new Swiper(".swiper-testimonial", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "3",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },


            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });

    </script>
</body>

</html>