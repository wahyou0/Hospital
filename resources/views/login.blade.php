<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Hospital - Boot &amp; UI </title>

    <meta name="description" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Codebase framework -->
    <link rel="stylesheet" id="css-main" href="{{asset('code/assets/css/codebase.min.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
  </head>

  <body>
    
    <div id="page-container" class="main-content-boxed">

      <!-- Main Container -->
      <main id="main-container">

        <!-- Page Content -->
        <div class="bg-body-dark">
          <div class="hero-static content content-full px-1">
            <div class="row mx-0 justify-content-center">
              <div class="col-lg-8 col-xl-6">
                <!-- Header -->
                <div class="py-4 text-center">
                  <a class="link-fx fw-bold" href="index.html">
                    <i class="fa fa-briefcase-medical"></i>
                    <span class="fs-4 text-body-color">Rumah</span><span class="fs-4">Sakit</span>
                  </a>
                  <h1 class="h3 fw-bold mt-4 mb-1">
                    Welcome to Rumah Sakit
                  </h1>
                  <h2 class="fs-5 lh-base fw-normal text-muted mb-0">
                    Silahkan Masukkan Email Dan Password Untuk LogIn
                  </h2>
                </div>
                <!-- END Header -->

                <!-- Sign In Form -->
                <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js -->
                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <form class="js-validation-signin" action="{{ url('login/proseslogin') }}" method="POST">
                  @csrf
                  <div class="block block-themed block-rounded block-fx-shadow">
                    <div class="block-header bg-gd-dusk">
                      <h3 class="block-title">Log In</h3>
                    </div>
                    <div class="block-content">
                      <div class="form-floating mb-4">
                        <input type="text" class="form-control @error('username')
                              is-invalid
                          @enderror" id="login-username" name="username" value="{{ old('username') }}">
                          @error('username')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              
                          @enderror
                        <label class="form-label" for="login-username">username</label>
                      </div>
                      <div class="form-floating mb-4">
                        <input type="password" class="form-control  @error('password')
                          is-invalid
                          @enderror"  id="login-password" name="password">
                          @error('password')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              
                          @enderror
                        <label class="form-label" for="login-password">Password</label>
                      </div>
                      <div class="row">
                        <div class="col-sm-12 text-sm-end push">
                          <button type="submit" class="btn btn-lg btn-alt-primary fw-medium">
                            Log In
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <!-- END Sign In Form -->
              </div>
            </div>
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!--
        Codebase JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="{{ asset('code/assets/js/codebase.app.min.js') }}"></script>

    <!-- jQuery (required for jQuery Validation plugins) -->
    <script src="{{ asset('code/assets/js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('code/assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('code/assets/js/pages/op_auth_signin.min.js') }}"></script>
  </body>
</html>