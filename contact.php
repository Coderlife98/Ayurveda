<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Us</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include ("./includes/link.php"); ?>
</head>

<body>

    <?php include ("./includes/header.php"); ?>

    <main>
        <!-- breadcrumb-area-start -->
        <div class="tp-breadcrumb-area-7 bg-position-default skull_height"
            data-background="assets/img/contact_hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-breadcrumb-list-5 pt-200 pb-185 wow fadeInUp" data-wow-delay=".3s"
                            data-wow-duration="1s">
                            <h2 class="tp-breadcrumb-title-6 mb-20">Contact Us</h2>
                            <div class="tp-breadcrumb-list-inner-5">
                                <span><a href="index.php">Home</a></span>
                                <span class="tp-breadcrumb-dvdr"> /</span>
                                <span class="tp-breadcrumb-title-pre-2">Contact Us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->
        <!-- tp-contact-item-area-start -->
        <div class="tp-contact-item-area pt-50 mb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="tp-contact-item-2 text-center wow fadeInDown" data-wow-delay=".3s"
                            data-wow-duration="1s">
                            <div class="tp-contact-icon mb-20">
                                <span><i class="fa-thin fa-location-dot"></i></span>
                            </div>
                            <div class="tp-contact-content">
                                <h4 class="tp-contact-title-3">Visit Our Place</h4>
                                <span><a href="javascript:void(0)">112 Jangethi Meerut UP</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="tp-contact-item-2 text-center wow fadeInDown" data-wow-delay=".5s"
                            data-wow-duration="1s">
                            <div class="tp-contact-icon mb-20">
                                <span><i class="flaticon-phone"></i></span>
                            </div>
                            <div class="tp-contact-content">
                                <h4 class="tp-contact-title-3">Email</h4>
                                <span><a href="mailto:manojfhp@gmail.com ">manojfhp@gmail.com </a></span>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="tp-contact-item-2 text-center wow fadeInDown" data-wow-delay=".5s"
                            data-wow-duration="1s">
                            <div class="tp-contact-icon mb-20">
                                <span><i class="flaticon-phone"></i></span>
                            </div>
                            <div class="tp-contact-content">
                                <h4 class="tp-contact-title-3">Contact Us</h4>
                                <span><a href="xxxxxx">xxxxxx</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tp-contact-item-area-end -->
        <!-- contact-form-area-start -->
        <div class="tp-contact-form-area pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-contact-form-2">
                            <h3 class="tp-contact-form-title-2 mb-40 wow fadeInUp" data-wow-delay=".3s"
                                data-wow-duration="1s">Send your message</h3>
                            <form action="./formhandler.php" method="post" class="wow fadeInUp" data-wow-delay=".4s"
                                data-wow-duration="1s">
                                <div class="row">
                                    <div class="col-lg-6 mb-20">
                                        <div class="tp-contact-single-input">
                                            <input type="text" id="name" oninput="this.value = this.value.toUpperCase().replace(/[^a-z,A-Z]/g, '').replace(/(\  *?)\  */g, '$1')" name="name" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <div class="tp-contact-single-input">
                                            <input type="email" id="email" name="email" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <div class="tp-contact-single-input">
                                            <input type="text" id="number"  oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')" maxlength="10" name="number" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <div class="tp-contact-single-input">
                                            <input type="text" name="address" id="address" placeholder="Enter Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-10">
                                        <div class="tp-contact-single-textarea">
                                            <textarea name="message" id="message"
                                                placeholder="Write your message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 ">
                                <div class="outer-box">
                                    <div class="inner-box1 d-flex justify-content-around  align-items-center "
                                        style="border:1px solid gray;padding: 8px 10px;background-color:#f4f4f4">
                                        <span class="text-dark fw-bolder">Enter Captcha:-</span>
                                        <div class="captcha-box-in d-flex align-items-center " >
                                            <div class="in-colo"  >
                                                <span id="first" class="text-dark fw-bolder"></span>
                                                <span id="plus">+</span>
                                                <span id="second" class="text-dark fw-bolder"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 my-3">
                                <input type="text" id="num" style="background-color: #f4f4f4;" placeholder="Enter Captcha Here" class="set-sum p-2"
                                    onkeyup="myFunction()" />
                            </div>


                                    <div class="tp-contact-btn-2">
                                        <button type="submit" class="tp-btn" name="submit" id="submit"
                                            onclick="return handleOperation()">SEND MESSAGE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact-form-area-end -->

    </main>
    <!-- footer-area-start -->
    <?php include ("./includes/footer.php"); ?>
    <!-- footer-area-end -->
    <!-- JS here -->
    <script>


var firstNu = document.getElementById("first");
        var num1 = (firstNu.innerHTML = Math.floor(Math.random() * 100));
        console.log("number1", num1);
        var secNum = document.getElementById("second");
        var num2 = (secNum.innerHTML = Math.floor(Math.random() * 10));
        console.log("number2", num2);


        function myFunction() {
            var userInput = document.getElementById("num");
            var inputValu = userInput.value;
            return inputValu;
        }
        var storeRandomValue = parseInt(num1) + parseInt(num2);





        function handleOperation() {
            var Name = document.getElementById("name").value;
            var Email = document.getElementById("email").value;
            var Number = document.getElementById("number").value;
            var Address = document.getElementById("address").value;
            var Message = document.getElementById("message").value;
            var namePattern = /^[A-Za-z\s\-]+$/;
            var phoneRegex = /^\d{10}$/;
            var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            var dued = myFunction();
            if (!Name) {
                alert("Please Enter Name");
                return false;
            } else if (!namePattern.test(Name)) {
                alert("Enter Only Alphabets Name");
                return false;
            } else if (!Email) {
                alert("Enter Email");
                return false;
            } else if (!emailRegex.test(Email)) {
                alert("Enter Valid Email");
                return false;
            } else if (!Number) {
                alert("Enter Phone Number");
                return false;
            } else if (!phoneRegex.test(Number)) {
                alert("Enter Correct Number");
                return false;
            } else if (!Address) {
                alert("Enter Message");
                return false;
            } else if (!(Address.length > 3)) {
                alert("Enter More Than 3 Letters");
                return false;
            } else if (!Message) {
                alert("Enter Message");
                return false;
            }else if (!dued) {
                alert("Please Enter Captcha");
                return false;
            } else if (namePattern.test(dued)) {
                alert("Enter Only Number");
                return false;
            }
            else if (dued != storeRandomValue) {
                alert("Enter Correct Captcha");
                return false;
            }
        }
    </script>
    <?php include ("./includes/script.php"); ?>
</body>

</html>