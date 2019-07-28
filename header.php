<?php include 'admin/dbconnect.php'?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cleaning Services</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ionicons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css">
    <!--Main Slider-->
    <link href="assets/css/settings.css" type="text/css" rel="stylesheet" media="screen">
    <link href="assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">
    <link href="assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">
    <link href="assets/css/owl.carousel.css" type="text/css" rel="stylesheet" media="screen">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/header.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/footer.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/index.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme-color/default.css" rel="stylesheet" type="text/css" id="theme-color" />
</head>
<body>
<!--loader-->
<div id="preloader">
    <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
    </div>
</div>

<!--loader-->

<!-- HEADER -->
<header>
    <div class="top-part__block">
        <div class="search__box-block">
            <div class="container">
                <input type="text" id="search" class="input-sm form-full" placeholder="Search Now">
                <a href="#!" class="search__close-btn"> <i class="fa fa-times" aria-hidden="true"></i> </a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <p>
                        Welcome to our corporate buisness
                    </p>
                </div>
                <div class="col-sm-5">
                    <div class="social-link__block text-right">
                        <a href="#" class="facebook"> <i class="fa fa-facebook"></i> </a>
                        <a href="#" class="twitter"> <i class="fa fa-twitter"></i> </a>
                        <a href="#" class="google-plus"> <i class="fa fa-google-plus"></i> </a>
                        <a href="#" class="linkedin"> <i class="fa fa-linkedin"></i> </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middel-part__block">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 logo col-md-12 d-flex align-items-center">

                    <a href="index.php"> <img src="assets/images/logo.png" alt="Logo"> </a>

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle hidden-lg-up" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>

                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="top-info__block text-right">
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    13005 Greenvile Avenue
                                    <span> California, TX 70240</span>
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>
                                    Call Us
                                    <span> +56 (0) 012 345 6789</span>
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p>
                                    Mail Us
                                    <span> <a href="mailto:info@gmail.com">info@gmail.com</a> </span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_nav stricky-header__top navbar-toggleable-md">

        <nav class="navbar navbar-default navbar-sticky bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->

                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav mobile-menu d-flex justify-content-between">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="#!">About us</a>
                            <span class="submenu-button"></span>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="team.php">About our Team</a>
                                </li>
                                <li>
                                    <a href="about.php">About Company</a>
                                </li>
                                <li>
                                    <a href="career.php">career</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:avoid(0);">Services</a>
                            <span class="submenu-button"></span>
                            <ul class="dropdown-menu">
                                <?php
                                $query = "Select * from servicecateg ";
                                $getImg = $con->query($query);
                                while($data = mysqli_fetch_array($getImg)) {
                                ?>
                                <li>
                                    <a href="<?php echo $data['name']?>.php"><?php echo $data['name']?></a>
                                </li>
                                <?php }?>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:avoid(0);">blog</a>
                            <span class="submenu-button"></span>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="blog.php">Blog</a>
                                </li>
                                <li>
                                    <a href="blog-detail.php">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:avoid(0);">Join Our Team</a>
                            <span class="submenu-button"></span>
                            <ul class="dropdown-menu">

                                <li>
                                    <a href="frenchise.php">Frenchise Form</a>
                                </li>

                                <li>
                                    <a href="cleaner.php">Cleaner Form</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:avoid(0);">Customers</a>
                            <span class="submenu-button"></span>
                            <ul class="dropdown-menu">


                                <li>
                                    <a href="pricing.php">pricing</a>
                                </li>
                                <li>
                                    <a href="faq.php">Faq</a>
                                </li>
                                <li>
                                    <a href="register.php">Register</a>
                                </li>
                                <li>
                                    <a href="login.php">login</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.php">Contact us</a>
                        </li>
                    </ul>
                </div>
                <!--navbar-collapse -->
            </div>
        </nav>
    </div>
</header>

<!-- END HEADER -->
