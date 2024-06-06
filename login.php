<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login || Man Ayurveda </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include ("./includes/link.php"); ?>
</head>

<body>

    <?php include ("./includes/header.php"); ?>

    <div class="tp-login-bg  bg-position-default" data-background="assets/img/login/login-bg.png">

        <main>
            <!-- login-area-srart -->
            <div class="login-area  pb-30">
                <div class="container py-5">
                    <div class="row ">
                        <div class="col-xl-7 col-12 col-lg-7">
                            <div class="tp-login-wrapper">
                                <h3 class="tp-login-title">Login</h3>
                               
                                <div class="tp-login-form">
                                    <form action="#">
                                        <div class="tp-login-input">
                                            <div class="tp-login-input-item mb-25">
                                                <label for="email">Your Email*</label>
                                                <input type="text" id="email" placeholder="youremail@gmail.com">
                                            </div>
                                            <div class="tp-login-input-item mb-15">
                                                <label for="myInput">Password*</label>
                                                <div class="tp-login-input-eye p-relative">
                                                    <input type="password" id="myInput" placeholder="Enter Password">
                                                    <span id="click" class="tp-login-eye-btn">
                                                        <span class="eye-on">
                                                            <svg width="20" height="17" viewBox="0 0 20 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.5"
                                                                    d="M2.1474 11.1661C1.38247 10.1723 1 9.67544 1 8.2C1 6.72456 1.38247 6.22767 2.1474 5.2339C3.67477 3.2496 6.2363 1 10 1C13.7637 1 16.3252 3.2496 17.8526 5.2339C18.6175 6.22767 19 6.72456 19 8.2C19 9.67544 18.6175 10.1723 17.8526 11.1661C16.3252 13.1504 13.7637 15.4 10 15.4C6.2363 15.4 3.67477 13.1504 2.1474 11.1661Z"
                                                                    stroke="#1C274C" stroke-width="1.5" />
                                                                <path
                                                                    d="M12.6969 8.2C12.6969 9.69117 11.488 10.9 9.99687 10.9C8.50571 10.9 7.29688 9.69117 7.29688 8.2C7.29688 6.70883 8.50571 5.5 9.99687 5.5C11.488 5.5 12.6969 6.70883 12.6969 8.2Z"
                                                                    stroke="#1C274C" stroke-width="1.5" />
                                                            </svg>
                                                        </span>
                                                        <span class="eye-off">
                                                            <svg width="18" height="18" viewBox="0 0 25 25" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_2547_24206)">
                                                                    <path
                                                                        d="M18.813 18.9113C17.1036 20.2143 15.0222 20.9362 12.873 20.9713C5.87305 20.9713 1.87305 12.9713 1.87305 12.9713C3.11694 10.6532 4.84218 8.62795 6.93305 7.03134M10.773 5.21134C11.4614 5.05022 12.1661 4.96968 12.873 4.97134C19.873 4.97134 23.873 12.9713 23.873 12.9713C23.266 14.1069 22.5421 15.1761 21.713 16.1613M14.993 15.0913C14.7184 15.3861 14.3872 15.6225 14.0192 15.7865C13.6512 15.9504 13.2539 16.0386 12.8511 16.0457C12.4483 16.0528 12.0482 15.9787 11.6747 15.8278C11.3011 15.6769 10.9618 15.4524 10.6769 15.1675C10.392 14.8826 10.1674 14.5433 10.0166 14.1697C9.86567 13.7962 9.79157 13.3961 9.79868 12.9932C9.80579 12.5904 9.89396 12.1932 10.0579 11.8252C10.2219 11.4572 10.4583 11.126 10.753 10.8513"
                                                                        stroke="black" stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M1.87305 1.97131L23.873 23.9713"
                                                                        stroke="black" stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_2547_24206">
                                                                        <rect width="24" height="24" fill="white"
                                                                            transform="translate(0.873047 0.971313)" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="tp-login-option mb-20">
                                                <div class="tp-login-remember">
                                                    <input id="remember" type="checkbox">
                                                    <label for="remember">Keep Me Logged In</label>
                                                </div>
                                                <div class="tp-login-formet">
                                                    <a href="#">Forget Password</a>
                                                </div>
                                            </div>
                                            <div class="tp-login-btn mb-20">
                                                <a href="#">LOGIN <i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="tp-login-register text-center">
                                        <p>Don't have an account? <a href="./register.php">Sign Up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-5 col-lg-5 d-flex align-items-center justify-content-center">
                            <div>
                                <img src="./assets/img/login/login.svg" height="370px" alt="">
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