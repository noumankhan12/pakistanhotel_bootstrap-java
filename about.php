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
        .box:hover {
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
                        <a class="nav-link me-2" href="#">Rooms</a>
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
        <h2 class="fw-bold h-font text-center">About Us</h2>

        <p class="text-center mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Tenetur nisi dolores atque est unde magni alias quas, optio recusandae
            nemo aliquid odio</p>
    </div>


    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4">
                <h3 class="mb-3">jhsjhs hewheh hweejw hshwsjw</h3>
                <p>Lorem ipsum dolor sit amet consectetur
                    illo consequatur natus ab beatae per
                    illo consequatur natus ab beatae per
                    molestiae nostrum, sapiente tempore </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4">
                <img src="images/about/5.jpg" class="w-100">
            </div>

        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/8.jpg" width="70px">
                    <h4 class="mt-3">100+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/6.jpg" width="70px">
                    <h4 class="mt-3">150+ Customers</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/7.jpg" width="70px">
                    <h4 class="mt-3">180+ Reviews</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/9.jpg" width="70px">
                    <h4 class="mt-3">100+ Staff</h4>
                </div>
            </div>
        </div>
    </div>


    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden roudned">
                    <img src="images/about/9.jpg" class="w-100">
                    Random Name
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden roudned">Random Name
                    <img src="images/about/9.jpg" class="w-100">
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden roudned">Random Name
                    <img src="images/about/9.jpg" class="w-100">
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden roudned">Random Name
                    <img src="images/about/9.jpg" class="w-100">
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden roudned">Random Name
                    <img src="images/about/9.jpg" class="w-100">
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden roudned">
                    <img src="images/about/9.jpg" class="w-100">
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 40,
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>



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