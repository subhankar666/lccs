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
                                <li class="nav-item <?php echo ($current_page == 'contact') ? 'active' : ''; ?>"><a class="nav-link" href="contact-us.php">Contact us</a></li>
                                <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Make a referral</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Sign up</a></li>
                            </ul>
                        </div>
                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="#" class="btn-default">Book a meeting</a>
                        </div>
                        <!-- Let’s Start Button End -->
                    </div>
                    <!-- Main Menu End -->

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
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0)" role="menuitem"
                                tabindex="-1">Make a referral</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0)" role="menuitem"
                                tabindex="-1">Sign up</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
