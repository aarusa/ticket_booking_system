<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/cms/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cms/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cms/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cms/vendors/font-awesome/css/font-awesome.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
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
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <!-- <img src="{{ asset('assets/cms/images/logo.svg') }}"> -->
                </div>
                <!-- <h4>Hello! let's get started</h4> -->
                <h4>Sign in to continue</h4>
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form class="pt-3" method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="form-group">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="mt-3 d-grid gap-2">
                    <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Login</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input" name="remember"> Keep me signed in </label>
                    </div>
                    <a href="#" class="auth-link text-primary">Forgot password?</a>
                  </div>
                
                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="{{ url('register') }}" class="text-primary">Register</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/cms/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/cms/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/cms/js/misc.js') }}"></script>
    <script src="{{ asset('assets/cms/js/settings.js') }}"></script>
    <script src="{{ asset('assets/cms/js/todolist.js') }}"></script>
    <script src="{{ asset('assets/cms/js/jquery.cookie.js') }}"></script>
    <!-- endinject -->
  </body>
</html>