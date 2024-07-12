<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Greenveel</title>
    <!-- favicons Icons -->
    <link rel="shortcut icon"  href="assets/images/fav.png" />

    <meta name="description" content="" />


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Water+Brush&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('home/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/bootstrap-select/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/eduact-icons/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/owl-carousel/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/owl-carousel/assets/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">




    <!-- template styles -->
    <link rel="stylesheet" href="" />
    <link rel="stylesheet" href="{{ asset('home/css/styles5.css') }}" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!--<div class="preloader">-->
    <!--    <div class="preloader__image" style="background-image: url(assets/images/greenveel_logo.svg);"></div>-->
    <!--</div>-->
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header">
            <nav class="main-menu">
                <div class="container">
                    <div class="main-menu__logo">
                        <a href="javascript:;">
                            <img src="{{ asset('home/images/greenveel_logo.svg') }}" alt="The top EV Charging Station in Thodupuzha">
                        </a>
                    </div><!-- /.main-menu__logo -->
                    <div class="main-menu__nav">
                          <ul class="main-menu__list">
                            <li>
                                <a href="{{ route('home') }}">Home</a>

                            </li>
                            <li class="">
                                <a href="{{ route('about') }}">About Us</a></li>
                            <li class="">
                                <a href="{{ route('outlets') }}">Outlets</a></li>
                            <li><a href="{{ route('blogs') }}">Blog</a> </li>
                            <li><a href="{{ route('contacts') }}">Contact</a></li>
                        </ul>

                    </div><!-- /.main-menu__nav -->

                 <div class="main-menu__right">
                        <a href="javascript:;" class="main-menu__toggler mobile-nav__toggler">
                            <i class="fa fa-bars"></i>
                        </a><!-- /.mobile menu btn -->

                         <a href="https://play.google.com/store/apps/details?id=com.chargezone&hl=en_IN" target="_blank" class="eduact-btn"><span class="eduact-btn__curve"></span>Download App</a><!-- /.contact btn -->
                    </div><!-- /.main-menu__right -->
                </div><!-- /.container -->

            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
