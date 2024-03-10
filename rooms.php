<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROOMS</title>
    <?php require('includes/links.php') ?>
    <link rel="stylesheet" href="css/common.css">

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

        .pop:hover {
            border-top-color: aqua !important;
            transform: scale(1.03);

        }
    </style>
</head>
<!-- header -->

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-3 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">PAKISTAN HOTEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-4 me-3" data-bs-toggle="modal" data-bs-target="#LoginModal">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#RegisterModal">
                        Registration
                    </button>
                </div>
            </div>
        </div>
    </nav>


    <!--section -->

    <div class="my-4 px-4">
        <h2 class="fw-bold h-font text-center">ROOMS</h2>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-lg-3 mb-lg-0 mb-4">

                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">

                        <h5 class="mt-2">FILTER</h5>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control shadow-none">
                                <label class="form-label mt-2">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>


                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-label mt-2" for="f1">Facility One</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-label mt-2" for="f2">Facility Two</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-label mt-2" for="f3">Facility Three</label>
                                </div>
                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <label class="form-label mt-2 ">Adults</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label mt-2">Childrens</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>


            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-3 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpeg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">SIMPLE ROOMS</h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3">
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
                            <div class="facilities">
                                <h6 class="mb-1">GUESTS</h6>
                                <span class="badge bg-light text-dark text-wrap">
                                    4 Childrens
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    4 Adults
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">RS 200 Per Night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-3">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More Detail</a>



                        </div>
                    </div>
                </div>

                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpeg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">SIMPLE ROOMS</h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3">
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
                            <div class="facilities">
                                <h6 class="mb-1">GUESTS</h6>
                                <span class="badge bg-light text-dark text-wrap">
                                    4 Childrens
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    4 Adults
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">RS 200 Per Night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-3">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More Detail</a>



                        </div>
                    </div>
                </div>
                <div class="card mb-3 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpeg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">SIMPLE ROOMS</h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3">
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
                            <div class="facilities">
                                <h6 class="mb-1">GUESTS</h6>
                                <span class="badge bg-light text-dark text-wrap">
                                    4 Childrens
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    4 Adults
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">RS 200 Per Night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-3">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More Detail</a>



                        </div>
                    </div>
                </div>
                <div class="card mb-3 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpeg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">SIMPLE ROOMS</h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3">
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
                            <div class="facilities">
                                <h6 class="mb-1">GUESTS</h6>
                                <span class="badge bg-light text-dark text-wrap">
                                    4 Childrens
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    4 Adults
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">RS 200 Per Night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-3">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More Detail</a>



                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>




    <!-- footer -->
    <?php require('includes/footer.php'); ?>


    <!-- Modal -->
    <div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i>User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
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

    <div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
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



    <!-- Initialize Swiper -->

</body>

</html>