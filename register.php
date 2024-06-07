<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register|| Man Ayurveda </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include ("./includes/link.php"); ?>
</head>

<body>

    <?php include ("./includes/header.php"); ?>

    <div class="tp-login-bg  bg-position-default">

        <main>
            <!-- login-area-srart -->
            <div class="login-area   ">
                <div class="container py-5 ">
                    <div class="row">
                        <div class="col-12 mt-4">
                            <h3 class="text-center fw-bolder">Registration</h3>
                        </div>
                    </div>
                    <div class="row ">
                        <!-- <h3 class="tp-login-title">Register</h3> -->
                        <div class="col-12 col-lg-7 my-2 d-flex justify-content-center align-items-center">
                            <form action="#">
                                <div class="col-12 set_flex_this">
                                    <div class="col-lg-6 col-12">
                                        <div class=" mb-25">
                                            <label for="name" class="fw-bolder">Name</label>
                                            <input type="text" id="name" class="border-rad" placeholder="Enter Name">
                                        </div>
                                        <div class=" mb-25">
                                            <label for="name" class="fw-bolder">Email</label>
                                            <input type="email" id="email" class="border-rad" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12 ps-lg-3">
                                        <div class="mb-25">
                                            <label for="myInput" class="fw-bolder">Phone Number</label>
                                            <div class="tp-login-input-eye p-relative">
                                                <input type="text" maxlength="10" id="phone" class="border-rad"  placeholder="Enter Phone Number">

                                            </div>
                                        </div>
                                        <div class=" mb-25">
                                            <label for="name" class="fw-bolder">Address</label>
                                            <input type="text" id="address" class="border-rad" placeholder="Enter Address">
                                        </div>
                                    </div>
                                </div>

                                <div class="tp-login-btn mb-20">
                                            <a href="#">Register <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                            </form>
                        </div>
                        <div class="col-12  col-lg-5 my-2 d-flex align-items-center justify-content-center">
                            <div>
                                <img src="./assets/img/reg.jpg" class="set_width" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- login-area-end -->
        </main>
    </div>
    <!-- JS here -->
    <?php include ("./includes/script.php"); ?>
</body>

</html>