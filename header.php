<?php
// Get the current page name
$current_page = basename($_SERVER['REQUEST_URI'], ".php");
?>
<!DOCTYPE html>
<html lang="zxx" style="">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>LCCS - Accounting &amp; Finance Company</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
        rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="css/all.min.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Main Custom Css -->
    <link href="css/custom.css" rel="stylesheet" media="screen">
</head>

<body>
<!-- Header Start -->
<header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="./">
                        <img src="images/Logo.png" alt="Logo">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item <?php echo ($current_page == 'index') ? 'active' : ''; ?>"><a class="nav-link" href="index.php">Home</a></li>
                                <li class="nav-item <?php echo ($current_page == 'about') ? 'active' : ''; ?>"><a class="nav-link" href="about.php">About Us</a></li>
                                <li class="nav-item <?php echo ($current_page == 'contact-us') ? 'active' : ''; ?>"><a class="nav-link" href="contact-us.php">Contact us</a></li>
                                <li class="nav-item submenu ">
                                    <a class="nav-link" href="#">Book a Meeting</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="https://calendly.com/lccs/free-tax-consultation">Free one hour online tax consultation</a></li>
                                        <li class="nav-item"><a class="nav-link" href="https://calendly.com/lccs/30-minute-phone-call">30 minute phone call</a></li>
                                        <li class="nav-item"><a class="nav-link" href="https://calendly.com/lccs/30min">30 minute online meeting</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item <?php echo ($current_page == 'make-a-referral') ? 'active' : ''; ?>"><a class="nav-link" href="make-a-referral.php">Make a Referral</a></li>

                            </ul>
                        </div>
                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="signup.php" class="btn-default">Sign up</a>
                        </div>
                        <!-- Let’s Start Button End -->
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle">
                    </div>
                </div>
            </nav>
            <div class="responsive-menu">
                <div class="slicknav_menu">
                    <ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
                        <li class="nav-item <?php echo ($current_page == 'index') ? 'active' : ''; ?>"><a class="nav-link" href="index.php" role="menuitem"
                                tabindex="-1">Home</a></li>
                        <li class="nav-item <?php echo ($current_page == 'about') ? 'active' : ''; ?>"><a class="nav-link" href="about.php" role="menuitem"
                                tabindex="-1">about
                                us</a></li>
                        <li class="nav-item <?php echo ($current_page == 'contact') ? 'active' : ''; ?>"><a class="nav-link" href="contact-us.php" role="menuitem"
                                tabindex="-1">Contact us
                            </a></li>
                        <li class="nav-item submenu slicknav_collapsed slicknav_parent">
                            <a href="#" role="menuitem" aria-haspopup="true" tabindex="-1"
                                class="slicknav_item slicknav_row" style="outline: none;">
                                <a class="nav-link" href="#" tabindex="-1">pages</a>
                                <span class="slicknav_arrow">►</span>
                            </a>
                            <ul role="menu" class="slicknav_hidden" aria-hidden="true" style="display: none;">
                                <li class="nav-item"><a class="nav-link" href="service-single.html" role="menuitem"
                                        tabindex="-1">Book a Meeting</a></li>
                                <li class="nav-item"><a class="nav-link" href="https://calendly.com/lccs/free-tax-consultation" role="menuitem"
                                        tabindex="-1">Free one hour online tax consultation</a></li>
                                <li class="nav-item"><a class="nav-link" href="https://calendly.com/lccs/30-minute-phone-call" role="menuitem"
                                        tabindex="-1">30 minute phone call</a></li>
                                <li class="nav-item"><a class="nav-link" href="https://calendly.com/lccs/30min" role="menuitem"
                                        tabindex="-1">30 minute online meeting</a></li>
                            </ul>
                        </li>
                        <li class="nav-item <?php echo ($current_page == 'signup') ? 'active' : ''; ?>"><a class="nav-link" href="signup.php" role="menuitem"
                                tabindex="-1">Sign up</a></li>


                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
