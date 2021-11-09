<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta property="og:image" content="{{asset('assets/images/share_logo.png')}}"/>
    <title>AURUM COUNSULTING</title>
    <!-- Stylesheets -->
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Teko:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/hover.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/jarallax.css')}}">
    <link href="{{asset('assets/css/custom-animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- rtl css -->
    <link href="{{asset('assets/css/rtl.css')}}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="{{asset('assets/css/colors/color-default.css')}}">

    <link rel="shortcut icon" href="{{asset('assets/images/ihrhsfav.png')}}" id="fav-shortcut" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/images/ihrhsfav.png')}}" id="fav-icon" type="image/x-icon">
    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    @yield('css')

</head>

<body class="{{ Request::is('/') ? 'body-dark' : '' }}">

    <div class="page-wrapper">
       
        <div class="preloader" style="display: none;">
            <div class="icon"></div>
        </div>
        <!-- Main Header -->
        <header class="main-header header-style-one">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="inner-container clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="/" title="AURUM COUNSULTING"><img
                                    src="{{asset('assets/images/ihrhs.png')}}" id="thm-logo" alt="International Human Resource & Hospitality Services"
                                    title="AURUM COUNSULTING"></a></div>
                    </div>
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span><span
                                class="txt">Menu</span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="{{ Request::is('/') ? 'current' : '' }}"> <a href="/">
                                            Home
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('client') ? 'current' : '' }}">
                                        <a href="{{url('/client')}}">Clients</a>
                                       
                                    </li>
                                   
                                   
                                    <li class="dropdown {{ Request::is('hospitality*','construction','healthcare','security','office','agriculture') ? 'current' : '' }}"><a href="#">Service Category</a>
                                        <ul>
                                            <li><a href="{{url('/hospitality')}}">Hospitality Management</a></li>
                                            <li><a href="{{url('/construction')}}">Construction</a></li>
                                            <li><a href="{{url('/healthcare')}}">Health Care</a></li>
                                            <li><a href="{{url('/security')}}">Security & Guarding</a></li>
                                            <li><a href="{{url('/office')}}">Office Management</a></li>
                                            <li><a href="{{url('/agriculture')}}">Agriculture & Farming</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ Request::is('service-agreement') ? 'current' : '' }}">
                                        <a href="{{url('/service-agreement')}}">Service Agreement</a>
                                       
                                    </li>
                                     <li class="{{ Request::is('about-us') ? 'current' : '' }}">
                                        <a href="{{url('/about-us')}}">About Us</a>
                                       
                                    </li>
                                    <li class="{{ Request::is('contact-us') ? 'current' : '' }}"><a href="{{url('/contact-us')}}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="other-links clearfix">
                    
                        <!--Search Btn-->
                        <div class="search-btn">
                        </div>

                        <div class="link-box">
                            <div class="call-us">
                                <a class="link" href="tel:+977 01-4374982">
                                    <span class="icon"></span>
                                    <span class="sub-text">Call Anytime</span>
                                    <span class="number">+977 01-4374982</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Header Upper-->

        </header>
        <!-- End Main Header -->

        <!--Mobile Menu-->
        <div class="side-menu__block">


            <div class="side-menu__block-overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.side-menu__block-overlay -->
            <div class="side-menu__block-inner ">
                <div class="side-menu__top justify-content-end">

                    <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="{{asset('assets/images/icons/close-1-1.png')}}"
                            alt=""></a>
                </div><!-- /.side-menu__top -->


                <nav class="mobile-nav__container">
                    <!-- content is loading via js -->
                </nav>
                <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
                <div class="side-menu__content">
                    <p>We have been infinitum carrying out the work in the area of manpower recruitment.Our Organization works with the dream that commitment within the work and services.</p>
                    <p><a href="mailto:info@aurum.com.np">info@aurum.com.np</a> <br>
                  
                    <a href="tel:+977  01-4374982">+977  01-4374982</a><br>
                   
                    </p>
                    <div class="side-menu__social">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div><!-- /.side-menu__content -->
            </div><!-- /.side-menu__block-inner -->
        </div><!-- /.side-menu__block -->

      

    @yield('content')
