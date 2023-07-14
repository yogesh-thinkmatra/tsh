<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Web</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/favicon.ico')}}">

    <!-- CSS
	============================================ -->
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/font-awesome.min.css')}}">

    <!-- Material design iconic font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/material-design-iconic-font.min.css')}}">

    <!-- Ionicons CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/ionicons.min.css')}}">

    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/flaticon.min.css')}}">

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper.min.css')}}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.min.css')}}">

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/lightgallery.min.css')}}">



    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">


    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">



    @yield('header')

</head>

<body>

    <!--====================  header area ====================-->
    <div class="header-area header-sticky header-sticky--default">
        <div class="header-area__desktop header-area__desktop--default">
            <!--=======  header top bar  =======-->
            <div class="header-top-bar">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <!-- top bar left -->
                            <div class="top-bar-left-wrapper">
                                <div class="social-links social-links--white-topbar d-inline-block">
                                    <ul>
                                        <li><a href="https://www.facebook.com"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="https://www.twitter.com"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="https://www.vimeo.com"><i class="zmdi zmdi-vimeo"></i></a></li>
                                        <li><a href="https://www.linkedin.com"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                                        <li><a href="https://www.skype.com"><i class="zmdi zmdi-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <!-- top bar right -->
                           
                        </div>
                    </div>
                </div>
            </div>
            <!--=======  End of header top bar  =======-->
            <!--=======  header info area  =======-->
            <div class="header-info-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="header-info-wrapper align-items-center">
                                <!-- logo -->
                                <div class="logo">
                                    <a href="index.html">
                                        <img width="178" height="39" src="{{asset('assets/img/logo/logo.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <!-- header contact info -->
                                <div class="header-contact-info">
                                    <div class="header-info-single-item">
                                        <div class="header-info-single-item__icon">
                                            <i class="zmdi zmdi-smartphone-android"></i>
                                        </div>
                                        <div class="header-info-single-item__content">
                                            <h6 class="header-info-single-item__title">Phone</h6>
                                            <p class="header-info-single-item__subtitle">98 9875 5968 54</p>
                                        </div>
                                    </div>
                                    <div class="header-info-single-item">
                                        <div class="header-info-single-item__icon">
                                            <i class="zmdi zmdi-home"></i>
                                        </div>
                                        <div class="header-info-single-item__content">
                                            <h6 class="header-info-single-item__title">Address</h6>
                                            <p class="header-info-single-item__subtitle">your address goes here</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- mobile menu -->
                                <div class="mobile-navigation-icon" id="mobile-menu-trigger">
                                    <i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=======  End of header info area =======-->
            <!--=======  header navigation area  =======-->
            <div class="header-navigation-area default-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- header navigation -->
                            <div class="header-navigation header-navigation--header-default position-relative">
                                <div class="header-navigation__nav position-static">
                                    <nav>
                                        <ul>
                                            <li >
                                                <a href="{{route('index')}}">HOME</a>
                                               
                                            </li>
                                            <li><a href="{{route('admin.blog.index')}}">Blog</a></li>

                                           
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=======  End of header navigation area =======-->
        </div>
    </div>
    <!--====================  End of header area  ====================-->
    
    
    <!--====================  start body area ====================-->
    @yield('body')
    <!--====================  end body area ====================-->






    <!--====================  footer area ====================-->
    <div class="footer-area dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-content-wrapper section-space--inner--100">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-12">
                                <!-- footer intro wrapper -->
                                <div class="footer-intro-wrapper">
                                    <div class="footer-logo">
                                        <a href="#">
                                            <img width="199" height="44" src="assets/img/logo/logo-light.webp" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="footer-desc">
                                        Lorem ipsum dolor sit amet consect adipisici elit, sed do eiusmod tempor
                                        incididuk ut labore et dolore magna aliqua Ut enim
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-2 offset-xl-1 col-lg-3 col-md-4">
                                <!-- footer widget -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget__title">USEFUL LINKS</h4>
                                    <ul class="footer-widget__navigation">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Company News</a></li>
                                        <li><a href="#">Projects</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 offset-xl-1 col-lg-3 col-md-4">
                                <!-- footer widget -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget__title">USEFUL LINKS</h4>
                                    <ul class="footer-widget__navigation">
                                        <li><a href="#">Our Services</a></li>
                                        <li><a href="#">Showcase</a></li>
                                        <li><a href="#">Affliates</a></li>
                                        <li><a href="#">Disclaimer</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 offset-xl-1 col-lg-3 col-md-4">
                                <!-- footer widget -->
                                <div class="footer-widget mb-0">
                                    <h4 class="footer-widget__title">CONTACT US</h4>
                                    <div class="footer-widget__content">
                                        <p class="address">Your address goes here, street Crossroad123.</p>
                                        <ul class="contact-details">
                                            <li><span>P:</span>99 55 66 88 526</li>
                                            <li><span>F:</span>55 44 77 62</li>
                                            <li><span>E:</span>cons@email.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-wrapper">
            <div class="footer-copyright text-center">
                <p class="copyright-text">&copy; Constrk 2021 Made with <i class="fa fa-heart text-danger"></i> by HasThemes</p>
            </div>
        </div>
    </div>
    <!--====================  End of footer area  ====================-->
    <!--=======  offcanvas mobile menu  =======-->

    <div class="offcanvas-mobile-menu" id="mobile-menu-overlay">
        <a href="javascript:void(0)" class="offcanvas-menu-close" id="mobile-menu-close-trigger">
            <i class="ion-android-close"></i>
        </a>

        <div class="offcanvas-wrapper">

            <div class="offcanvas-inner-content">
                <div class="offcanvas-mobile-search-area">
                    <form action="#">
                        <input type="search" placeholder="Search ...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Homepage One</a></li>
                                <li><a href="index-2.html">Homepage Two</a></li>
                                <li><a href="index-3.html">Homepage Three</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li class="menu-item-has-children">
                            <a href="service.html">Service</a>
                            <ul class="sub-menu">
                                <li><a href="service.html">Service Page</a></li>
                                <li><a href="service-details.html">Service Details Left Sidebar</a></li>
                                <li><a href="service-details-right-sidebar.html">Service Details Right Sidebar</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)">Project</a>
                            <ul class="sub-menu">
                                <li><a href="project.html">Project Page</a></li>
                                <li><a href="project-details.html">Project Details</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Submenu Level One</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Submenu Level Two</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Submenu Level One</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Submenu Level Two</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>



                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <div class="header-contact-info">
                            <ul class="header-contact-info__list">
                                <li><i class="ion-android-phone-portrait"></i> <a href="tel://12452456012">(1245) 2456
                                        012 </a></li>
                                <li><i class="ion-android-mail"></i> <a
                                        href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Off Canvas Widget Social Start-->
                    <div class="off-canvas-widget-social">
                        <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                        <a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
                    </div>
                    <!--Off Canvas Widget Social End-->
                </div>
            </div>
        </div>

    </div>

    <!--=======  End of offcanvas mobile menu  =======-->
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="ion-android-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->
    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!-- jQuery JS -->
    <script src="{{asset('assets/js/vendor/jquery.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>

    <!-- Popper JS -->
    <script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>

    <!-- Swiper Slider JS -->
    <script src="{{asset('assets/js/plugins/swiper.min.js')}}"></script>

    <!-- Light gallery JS -->
    <script src="{{asset('assets/js/plugins/lightgallery.min.js')}}"></script>

    <!-- Light gallery video JS -->
    <script src="{{asset('assets/js/plugins/lg-video.min.js')}}"></script>

    <!-- Waypoints JS -->
    <script src="{{asset('assets/js/plugins/waypoints.min.js')}}"></script>

    <!-- Counter up JS -->
    <script src="{{asset('assets/js/plugins/counterup.min.js')}}"></script>

    <!-- Mailchimp JS -->
    <script src="{{asset('assets/js/plugins/mailchimp-ajax-submit.min.js')}}"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <!--
<script src="assets/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

    @yield('footer')



</body>

</html>