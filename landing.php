<?php

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Forecast</title>
    
    <?php include "include/links.php" ?>

</head>
<body oncontextmenu="return false">   
    <?php
        include "include/nav.php"
    ?>

    <?php
        // if($_SESSION['showAlert'] == true){
        //     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //     <strong>Success!</strong> Your Account Is Successfully Created And Now You Can LogIn.
        //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        // </div>
        // ';
        // }
    ?>

<?php
        // if($_SESSION['showError'] == true){
        //     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        //     <strong>Sorry!</strong> This Email Is Already Registered With Us.
        //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        // </div>
        // ';
        // }
    ?>
    

        <!-- Intro -->
    <div id="section">
        <div class="container-xxl">
            <div class="row justify-content-center align-item-center">
                <h1>
                    <p class="display-1 text-center">Weather Forecast</p>
                    <p class="display-5 text-center">Every Data Is Accurate</p>
                </h1>
                <a href="#" onclick="openForm2()" class="btn btn-success btn-intro">Get Started</a>
            </div>
        </div>
    </div>

    <!-- Features -->
    <div id="features">
        <div class="container-xxl p-5">
            <div class="row justify-content-center align-item-center mb-5">
                    <div class="col mb-5">
                        <p class="features-heading text-center h3">
                            Why To Choose Us
                        </p>
                        <p class="features-heading text-center h1">
                            Our Super Features
                        </p>
                        <hr class="hr"> 
                    </div>
            </div>

            <div class="row justify-content-center align-item-center ">
                <div class="col-md-7 col-lg-3 mx-4 ">
                   <div class="feature-box shadow">
                    <img src="images/1.png" alt="">
                    <h4>Realtime Updates</h4>
                    <p>You don't have to worry abouyt data accuracy anymore, because the data is always realtime</p>
                   </div>
                </div>
                <div class="col-md-7 col-lg-3 mx-4">
                    <div class="feature-box shadow">
                        <img src="images/2.png" alt="">
                        <h4>FullTime Support</h4>
                        <p>We really appriciate your time and energy, therefore we will help you anytime.</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-3 mx-4">
                    <div class="feature-box shadow">
                        <img src="images/3.png" alt="">
                        <h4>100% Secure</h4>
                        <p>We use the safest encryption system so that your data will not be known by any third party.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Designed by Mohit Bhatt -->
    <!-- About Us -->
    <div id="about">
        <div class="container-xxl p-5">
            <div class="row justify-content-center align-item-center">
                <div class="col">
                    <p class="features-heading text-center h3">
                        About us
                    </p>
                    <p class="features-heading text-center h1">
                        Know More About This!
                    </p>
                    <hr class="hr"> 
                </div>
            </div> 
            <div class="row justify-content-center align-item-center about-us-row">
                <div class="col-md-5 text-center about-cont text-md-start">
                    <h1>
                        <!-- <p class="display-1 text-dark">About Us</p> -->
                        <p class="display-5 text-dark">Best Weather Forecast in 2023</p>
                    </h1>
                    <p class="lead my-4">We are proud to be able to provide the best service so that we are nominated for the best Application.</p>
                    <a href="about.html" class="btn btn-about btn-success">Read More</a>
                </div>

                <div class="col-md-5 about-cont text-center">
                    <img src="images/data.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- How it Works -->
    <div id="works">
        <div class="container-xxl p-5">
            <div class="row justify-content-center align-item-center mb-5">
                    <div class="col">
                        <p class="features-heading text-center h3">
                            Working Process
                        </p>
                        <p class="features-heading text-center h1">
                            How it Works
                        </p>
                        <hr class="hr"> 
                    </div>
            </div>

            <div class="row justify-content-center align-item-center ">
                <div class="col-md-7 col-lg-3 mx-4 ">
                   <div class="feature-box work-box shadow">
                    <button disabled="disabled" class="work-btn btn btn-success">Step 1</button>
                    <h4>Sign Up For Free</h4>
                    <p>You don't have to worry abouyt data accuracy anymore, because the data is always realtime</p>
                   </div>
                </div>
                <div class="col-md-7 col-lg-3 mx-4">
                    <div class="feature-box  work-box shadow">
                        <button disabled="disabled" class="work-btn btn btn-success">Step 2</button>
                        <h4>Search The Region</h4>
                        <p>We really appriciate your time and energy, therefore we will help you anytime.</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-3 mx-4">
                    <div class="feature-box work-box shadow">
                        <button disabled="disabled" class="work-btn btn btn-success">Step 3</button>
                        <h4>Get Information</h4>
                        <p>We use the safest encryption system so that your data will not be known by any third party.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Designed by Mohit Bhatt -->
    <!-- links -->
    <div id="links" class="mb-5">
        <div class="container-xxl p-5">
            <div class="row justify-content-center align-item-center">
                <div class="col">
                    <p class="features-heading text-center h3">
                        Social Handles
                    </p>
                    <p class="features-heading text-center h1">
                        Connect With Us
                    </p>
                    <hr class="hr"> 
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-item-center ">
            <div class="col-md-7 mx-4 ">
               <div class="social">
                    <div class="social-icon shadow">
                        <a href="instagram.com" class="btn"><i class="fa fa-instagram"></i></a>
                    </div>
                    <div class="social-icon shadow">
                        <a href="instagram.com" class="btn "><i class="fa fa-facebook"></i></a>
                    </div>
                    <div class="social-icon shadow">
                        <a href="instagram.com" class="btn"><i class="fa fa-whatsapp"></i></a>
                    </div>
                    <div class="social-icon shadow">
                        <a href="instagram.com" class="btn"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="social-icon shadow">
                        <a href="instagram.com" class="btn"><i class="fa fa-snapchat"></i></a>
                    </div>
                    <div class="social-icon shadow">
                        <a href="instagram.com" class="btn"><i class="fa fa-twitch"></i></a>
                    </div>
               </div>
            </div>
        </div>
    </div>
    
    <div class="top shadow">
        <a href="#section"><i class="fa fa-arrow-up"></i></a>
    </div>

</body>
</html>