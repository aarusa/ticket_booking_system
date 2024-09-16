<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Jetly | Online Ticket Booking')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/cms/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cms/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cms/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cms/vendors/font-awesome/css/font-awesome.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/cms/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/cms/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/cms/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/cms/images/favicon.png') }}" />
  </head>
  <body>

    <div class="container-scroller">
        <!-- Main Content Section -->
        @yield('content') 
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/cms/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/cms/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/cms/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/cms/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/cms/js/misc.js') }}"></script>
    <script src="{{ asset('assets/cms/js/settings.js') }}"></script>
    <script src="{{ asset('assets/cms/js/todolist.js') }}"></script>
    <script src="{{ asset('assets/cms/js/jquery.cookie.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/cms/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>