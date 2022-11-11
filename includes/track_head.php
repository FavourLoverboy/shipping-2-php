<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="http://localhost/shipping-2-php/"/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Everyday Logistics Service :: Track Shipment || Cargo || Logistics || Shipment || Trucking || Transportation
        </title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/png" href="img/icon.png">

        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

        <!-- Plugins for this template -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/odometer-theme-default.css" rel="stylesheet">
        <link href="css/slick.css" rel="stylesheet">
        <link href="css/slick-theme.css" rel="stylesheet">
        <link href="css/slicknav.min.css" rel="stylesheet">
        <link href="css/jquery.fancybox.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/track.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="css/new_w3.css">


        <style type="text/css">
            ul, li a:hover{
                text-decoration: none !important;
            }
            /* The actual timeline (the vertical ruler) */
            .timelinee {
                position: relative;
                max-width: 1200px;
                margin: 0 auto;
            }
            /* The actual timeline (the vertical ruler) */
            .timelinee::after {
                content: '';
                position: absolute;
                width: 6px;
                background-color: white;
                top: 0;
                bottom: 0;
                left: 50%;
                margin-left: -3px;
            }
            /* Container around content */
            .containerr {
                padding: 10px 40px;
                position: relative;
                background-color: inherit;
                width: 50%;
            }
            /* The circles on the timeline */
            .containerr::after {
                content: '';
                position: absolute;
                width: 25px;
                height: 25px;
                right: -17px;
                background-color: white;
                border: 4px solid #FF9F55;
                top: 15px;
                border-radius: 50%;
                z-index: 1;
            }
            /* Place the container to the left */
            .leftt {
                left: 0;
            }
            /* Place the container to the right */
            .rightt {
                left: 50%;
            }
            /* Add arrows to the left container (pointing right) */
            .leftt::before {
                content: " ";
                height: 0;
                position: absolute;
                top: 22px;
                width: 0;
                z-index: 1;
                right: 30px;
                border: medium solid white;
                border-width: 10px 0 10px 10px;
                border-color: transparent transparent transparent white;
            }
            /* Add arrows to the right container (pointing left) */
            .rightt::before {
                content: " ";
                height: 0;
                position: absolute;
                top: 22px;
                width: 0;
                z-index: 1;
                left: 30px;
                border: medium solid white;
                border-width: 10px 10px 10px 0;
                border-color: transparent white transparent transparent;
            }
            /* Fix the circle for containers on the right side */
            .rightt::after {
                left: -16px;
            }
            /* The actual content */
            .contentt {
                padding: 20px 30px;
                background-color: white;
                position: relative;
                border-radius: 6px;
            }
            /* Media queries - Responsive timeline on screens less than 600px wide */
            @media screen and (max-width: 600px) {
                /* Place the timelime to the left */
                .timelinee::after {
                    left: 31px;
                }

                .a{
                    margin-left: 50px;
                }
                /* Full-width containers */
                .containerr {
                    width: 100%;
                    padding-left: 70px;
                    padding-right: 25px;
                }
                /* Make sure that all arrows are pointing leftwards */
                .containerr::before {
                    left: 60px;
                    border: medium solid white;
                    border-width: 10px 10px 10px 0;
                    border-color: transparent white transparent transparent;
                }
                /* Make sure all circles are at the same spot */
                .leftt::after, .rightt::after {
                    left: 15px;
                }
        
                /* Make all right containers behave like the left ones */
                .rightt {
                    left: 0%;
                }
            }
        </style>
    </head>
    <body>
        <!-- start page-loader -->
        <div class="page-loader">
            <div class="page-loader-inner">
                <div class="inner"></div>
            </div>
        </div>
        <!-- end page-loader -->

        <!-- header-area start -->
        <header>
            <!-- YANDEX TRANSLATOR -->
            <div id="ytWidget" style=" bottom: 350px; right: 20px; position: fixed; z-index: 99; font-size: 18px; border: none; outline: none; cursor: pointer; padding: 15px; border-radius: 4px;
            "></div>
            <script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"></script>
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-12 col-lg-6">
                            <ul class="d-flex account_login-area">
                                <li>
                                    <i class="fa fa-envelope" aria-hidden="true"></i></i>
                                    info@rapidparcelexpress.com
                                </li>
                                <li>
                                    <i class="fa fa-map" aria-hidden="true"></i></i>
                                    London, Uk
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12 col-lg-6">
                            <div class="row">
                                <div class="col-lg-7 col-md-6">
                                    <ul class="d-flex header-social">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-area"  id="sticky-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                            <div class="logo">
                                <a href="home">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <br>
                        </div>
                        <div class="col-lg-8 d-none d-lg-block">
                            <div class="main-menu">
                                <nav class="nav_mobile_menu">
                                    <ul>
                                        <li class="">
                                            <a href="home">Home</a> 
                                        </li>
                                        <li class="active">
                                            <a href="tracking">Tracking</a> 
                                        </li>
                                        <li>
                                            <a href="about">About</a>
                                        </li>
                                        <li >
                                            <a href="service">Service</a> 
                                        </li>
                                        <li>
                                            <a href="contact">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-3 col-sm-3 col-3 search">
                            <ul>
                                <li><a href="javascript:void(0);"><i class="fa fa-search"></i></a>
                                    <ul>
                                        <li>
                                            <form action="">
                                                <input type="text" placeholder="search here..">
                                                <button><i class="fa fa-search"></i></button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 d-block d-lg-none">
                            <div class="mobile_menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area end -->