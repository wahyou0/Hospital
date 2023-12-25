<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Hospital &amp; UI Framework</title>

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
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('logo/logo_unhas.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Page JS Plugins datetime picker -->
    <link rel="stylesheet" href="{{ asset('code/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('code/assets/js/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('code/assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css') }}">
    <link rel="stylesheet" href="{{ asset('code/assets/js/plugins/dropzone/min/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('code/assets/js/plugins/flatpickr/flatpickr.min.css') }}">

    <!-- Codebase framework -->
    <link rel="stylesheet" id="css-main" href="{{ asset('code/assets/css/codebase.min.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <link rel="stylesheet" id="css-theme" href="{{ asset('code/assets/css/themes/corporate.min.css') }}">
    <!-- END Stylesheets -->
  </head>

  <body>
    <div id="page-container" class="sidebar-dark side-scroll page-header-fixed page-header-glass page-header-dark main-content-boxed">

      <!-- Sidebar -->
     

      
      <!-- END Sidebar -->

      <!-- Header -->

      @include('user.header')

      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">

        <!-- Header -->
        <div class="bg-primary-dark">
          <div class="content content-top">
            <div class="row push">
              <div class="col-md py-2 d-md-flex align-items-md-center text-center">
                <h1 class="text-white mb-0">
                  {{-- <span class="fw-light">Dashboard</span> --}}
                  <span class="fw-normal fs-lg text-white-75 d-none d-md-inline-block">Welcome Silahkan daftar untuk ambil nomor antrian</span>
                </h1>
              </div>
              <div class="col-md py-2 d-md-flex align-items-md-center justify-content-md-end text-center">
                <a href="{{ url('pasien-daftar')}}">
                <button type="button" class="btn btn-alt-primary">
                  <i class="fa fa-user-plus opacity-50 me-1"></i> Daftar
                </button>
              </a>
              </div>
            </div>
          </div>
        </div>
        <!-- END Header -->

        <!-- Page Content -->
        @yield('content')
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      @include('user.foother')
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <script src="{{ asset('code/assets/js/codebase.app.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('codeassets/js/plugins/chart.js/chart.umd.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('codeassets/js/pages/db_corporate.min.js') }}"></script>

    {{-- datetime picker --}}
    <script src="{{ asset('code/assets/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/masked-inputs/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/flatpickr/flatpickr.min.js') }}"></script>
    <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Maxlength + Select2 + Ion Range Slider + Masked Inputs + Password Strength Meter plugins) -->
    <script>Codebase.helpersOnLoad(['js-flatpickr', 'jq-datepicker', 'jq-maxlength', 'jq-select2', 'jq-rangeslider', 'jq-masked-inputs', 'jq-pw-strength']);</script>

  </body>
</html>