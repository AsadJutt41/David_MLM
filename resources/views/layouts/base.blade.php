<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from corporx.themetags.com/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Oct 2022 08:55:56 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--favicon icon-->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png" sizes="16x16">

    <!--title-->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css' )}}">
    <!-- endbuild -->
</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="loader1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--preloader end-->
    <!--header top start-->
    <!--topbar start-->
    <div id="header-top-bar" class="top-bar bg-soft py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 d-none d-lg-block d-md-block">
                    <div class="topbar-text font-small font-weight-normal">
                        <span class="mr-2"><i class="fas fa-envelope mr-1"></i> support@yourdomain.com</span>
                        <span><i class="fas fa-map-marker mr-1"></i> Address CA-234/B New York, USA</span>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="topbar-text call-us-number font-small font-weight-normal text-lg-right">
                        <span><i class="fas fa-phone mr-2"></i>Call Now: <strong>883-4565-123456</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--topbar end-->
    <!--header top end-->

    <!--header section start-->
    <header class="header position-relative z-9">
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-dark navbar-theme-primary fixed-top headroom">
            <div class="container position-relative">
                <a class="navbar-brand mr-lg-3" href="index.html">
                    <img class="navbar-brand-dark" src="{{ asset('assets/img/logo-white.png') }}" alt="menuimage">
                    <img class="navbar-brand-light" src="{{ asset('assets/img/logo-color.png') }}" alt="menuimage">
                </a>
                <div class="navbar-collapse collapse" id="navbar-default-primary">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="#">
                                    <img src="{{ asset('assets/img/logo-color.png') }}" alt="menuimage">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <i class="fas fa-times" data-toggle="collapse" role="button"
                                   data-target="#navbar-default-primary" aria-controls="navbar-default-primary"
                                   aria-expanded="false" aria-label="Toggle navigation"></i>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-hover ml-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <span class="nav-link-inner-text">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">Overview of our Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                        </li>
                        @if(Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard.dashboard') }}">Dashboard</a>
                            </li>
                            <form method="POST" action="{{ route('logout') }}" id="formId">
                                @csrf
                                <li>
                                    <a class="nav-link" href="javascript:void(0);" onClick='submitLogoutForm()'>Logout</a>
                                </li>
                            </form>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar-default-primary" aria-controls="navbar-default-primary" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <!--header section end-->

    @yield('content')

    <!--footer section start-->
    <footer class="footer-wrap">
        <div class="footer footer-top section section-md bg-primary text-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <a class="footer-brand mr-lg-5 d-flex" href="index.html">
                            <img src="{{ asset('assets/img/logo-white.png') }}" class="mr-3" alt="Footer logo">
                        </a>
                        <p class="my-4">Interactively unleash interactive best practices before technically sound portals.</p>
                        <div class="btn-wrapper mt-4">
                            <button class="btn btn-icon-only btn-pill btn-twitter mr-2 icon icon-xs icon-shape" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="40k Followers">
                                <span aria-hidden="true" class="fab fa-twitter"></span>
                            </button>
                            <button class="btn btn-icon-only btn-pill btn-facebook mr-2 icon icon-xs icon-shape" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="50k Like">
                                <span aria-hidden="true" class="fab fa-facebook-f"></span>
                            </button>
                            <button class="btn btn-icon-only btn-pill btn-youtube mr-2 icon icon-xs icon-shape" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="25k Subscribe">
                                <span aria-hidden="true" class="fab fa-youtube"></span>
                            </button>
                            <button class="btn btn-icon-only btn-pill btn-dribbble icon icon-xs icon-shape" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="2k Project">
                                <span aria-hidden="true" class="fab fa-dribbble"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <h5 class="mb-4">Company</h5>
                        <ul class="links-vertical">
                            <li><a target="_blank" href="#">About Us</a></li>
                            <li><a target="_blank" href="#">Careers</a></li>
                            <li><a target="_blank" href="#">Customers</a></li>
                            <li><a target="_blank" href="#">Community</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <h5 class="mb-4">Resources</h5>
                        <ul class="links-vertical">
                            <li><a target="_blank" href="#">Help</a></li>
                            <li><a target="_blank" href="#">Events</a></li>
                            <li><a target="_blank" href="#">Live sessions</a></li>
                            <li><a target="_blank" href="#">Open sources</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <h5 class="mb-4">Support</h5>
                        <ul class="links-vertical">
                            <li><a target="_blank" href="#">Help</a></li>
                            <li><a target="_blank" href="#">Tech Support</a></li>
                            <li><a target="_blank" href="#">Network Status</a></li>
                            <li><a target="_blank" href="#">Contact Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer py-3 bg-primary text-white border-top border-variant-default">
            <div class="container">
                <div class="row">
                    <div class="col p-3">
                        <div class="d-flex text-center justify-content-center align-items-center">
                            <p class="copyright pb-0 mb-0">Copyrights © 2021. All
                                rights reserved by
                                <a href="https://themeforest.net/user/themetags" target="_blank">ThemeTags</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer section end-->
    <!--scroll bottom to top button start-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </button>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    <script src="{{ asset('assets/js/vendors/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/headroom.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/countUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!--endbuild-->

    {{-- /****************   Logout Javascript   **************/ --}}
    <script language="javascript" type="text/javascript">
        function submitLogoutForm() {
            $("#formId").submit();
        }
    </script>
</body>


<!-- Mirrored from corporx.themetags.com/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Oct 2022 08:56:17 GMT -->
</html>