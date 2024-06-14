<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Thank You </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('./includes/link.php');  ?>
    <style>
        @media (max-width:992px){
            .set-this{
               object-fit: contain;
               width:100%;
               margin-top:86px;
            }
        }
        @media (min-width:768px) {
            .set-this{
               object-fit: contain;
               width:100%;
               margin-top:86px;
            }
        }
        .thank_bg{
            /* border-radius: 0px 0px 150px 150px; */
        }
    </style>
    </head>
    <body>
        <?php include("includes/header.php");?>

      




    <!-- main-area -->
    <main>
        <section style="background-color:rgb(170, 165, 165,0.2);padding: 40px 0px;">
           <div class="container" style="" >
           <div class="row">


<div class="col-12 col-md-6">
    <div class="container" style=" margin:10% auto;">
        <?php
        echo $_SESSION['response'];
        ?>
    </div>
</div>
<div class="col-12 col-md-6 d-flex  justify-content-center ">
<div class="thimg">
    <img src="./assets/img/thank.png" class="thank_bg" height="300px" alt="">
</div>
</div>

</div>
           </div>

        </section>

    </main>
    <!-- main-area-end -->





    <?php include('./includes/footer.php');?>

    <?php include('./includes/script.php');?>
    </body>
</html>