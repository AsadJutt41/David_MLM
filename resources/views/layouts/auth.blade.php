<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from corporx.themetags.com/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Oct 2022 08:57:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--favicon icon-->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png" sizes="16x16">

    <!--title-->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
    <div class="main">

        @yield('content')

    </div>

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
    <!--< src="{{ asset('assets/js/vendors/countUp.min.js"></') }}script>-->
    <script src="{{ asset('assets/js/vendors/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!--endbuild-->

    {{-- ///********  Auto Complete dropdown Select 2   *********/// --}}
    <script>
        $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
    </script>
</body>


<!-- Mirrored from corporx.themetags.com/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Oct 2022 08:57:12 GMT -->
</html>