<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Hospital - Boot &amp; UI</title>

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
    <link rel="stylesheet" id="css-main" href="{{ asset('code/assets/css/codebase.min.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
  </head>

  <body>
    <!-- Page Container -->
    <!--
      Available classes for #page-container:

      GENERIC

        'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                    - Theme helper buttons [data-toggle="theme"],
                                                    - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                    - ..and/or Codebase.layout('dark_mode_[on/off/toggle]')

      SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

      HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header

      HEADER STYLE

        ''                                          Classic Header style if no class is added
        'page-header-modern'                        Modern Header style
        'page-header-dark'                          Dark themed Header (works only with classic Header style)
        'page-header-glass'                         Light themed Header with transparency by default
                                                    (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
        'page-header-glass page-header-dark'        Dark themed Header with transparency by default
                                                    (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

      MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

      DARK MODE

        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
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
                    <span class="fs-4 text-body-color">Rumah</span><span class="fs-4">Saki</span>
                  </a>
                  <h1 class="h3 fw-bold mt-4 mb-1">
                    Form Buat Akun
                  </h1>
                  <h2 class="fs-5 lh-base fw-normal text-muted mb-0">
                    Massukkan data anda dengan benar
                  </h2>
                </div>
                <!-- END Header -->

                <!-- Sign Up Form -->
                <!-- jQuery Validation functionality is initialized with .js-validation-signup class in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js -->
                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <form class="js-validation-signup" action="{{ url('register/create')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="block block-themed block-rounded block-fx-shadow">
                    <div class="block-header bg-gd-emerald">
                      <h3 class="block-title">Silahkan Masukkan Data Anda</h3>
                    </div>
                    <div class="block-content">
                      <div class="form-floating mb-4">
                        <input type="text" class="form-control @error('name')
                        is-invalid
                        @enderror" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                        
                        @enderror
                        <label class="form-label" for="signup-username">Nama Lengkap</label>
                      </div>
                      <div class="form-floating mb-4">
                        <input type="text" class="form-control @error('username')
                        is-invalid
                        @enderror" id="signup-username" name="username" value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                        
                        @enderror
                        <label class="form-label" for="signup-username">Username</label>
                      </div>
                      <div class="form-floating mb-4">
                        <input type="file" class="form-control @error('image')
                        is-invalid
                        @enderror" name="image" accept="image/*">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                        
                        @enderror
                        <label class="form-label" for="signup-username">Foto</label>
                      </div>
                      <div class="form-floating mb-4">
                        <input type="password" class="form-control @error('password')
                        is-invalid
                        @enderror" id="signup-password" name="password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                        
                        @enderror
                        <label class="form-label" for="signup-password">Password</label>
                      </div>

                      <input type="hidden" class="form-control" name="level" value="1">

                      <div class="row">
                        <div class="col-sm-12 text-sm-end push">
                          <button type="submit" class="btn btn-lg btn-alt-primary fw-semibold">
                            Create Account
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="block-content block-content-full bg-body-light d-flex justify-content-between">
                      <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="{{ url('login')}}">
                        <i class="fa fa-arrow-left opacity-50 me-1"></i> Sign In
                      </a>
                      <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="#" data-bs-toggle="modal" data-bs-target="#modal-terms">
                        <i class="fa fa-book opacity-50 me-1"></i> Read Terms
                      </a>
                    </div>
                  </div>
                </form>
                <!-- END Sign Up Form -->
              </div>
            </div>
          </div>

          <!-- Terms Modal -->
          <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
              <div class="modal-content">
                <div class="block block-rounded shadow-none mb-0">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="block-content fs-sm">
                    <h5 class="mb-2">1. General</h5>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
                    </p>
                    <h5 class="mb-2">2. Account</h5>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
                    </p>
                    <h5 class="mb-2">3. Service</h5>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
                    </p>
                    <h5 class="mb-2">4. Payments</h5>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
                    </p>
                  </div>
                  <div class="block-content block-content-full block-content-sm text-end border-top">
                    <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
                      Close
                    </button>
                    <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
                      Done
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Terms Modal -->
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
    <script src="{{ asset('code/assets/js/pages/op_auth_signup.min.js') }}"></script>
  </body>
</html>