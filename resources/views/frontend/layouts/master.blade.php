<!-- resources/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Default Title')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/frontend/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/frontend/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/frontend/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/frontend/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="Online ticket booking system" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/jetly-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/timepicker/timePicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/nice-select/nice-select.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jetly.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jetly-responsive.css') }}" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <!-- Header section -->
        @if (request()->is('/'))
            @include('frontend.layouts.header-home') 
        @else
            @include('frontend.layouts.header')
        @endif
        
        <!-- Main Content Section -->
        @yield('content') 

        <!--Site Footer Start-->
        @include('frontend.layouts.footer')
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="/" aria-label="logo image"><img src="{{ asset('assets/frontend/images/resources/logo-1.png') }}" width="143"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@jetly.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>


    <script src="{{ asset('assets/frontend/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/timepicker/timePicker.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/circleType/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/nice-select/jquery.nice-select.min.js') }}"></script>




    <!-- template js -->
    <script src="{{ asset('assets/frontend/js/jetly.js') }}"></script>
</body>

</html>