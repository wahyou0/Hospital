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
    <link rel="shortcut icon" href="{{ asset('code/assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('code/assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('code/assets/media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('code/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('code/assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('code/assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('code/assets/js/plugins/select2/css/select2.css') }}">



    <!-- Codebase framework -->
    <link rel="stylesheet" id="css-main" href="{{ asset('code/assets/css/codebase.min.css') }}">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css" rel="stylesheet">

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
    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
      <!-- Side Overlay-->

      {{-- side right  --}}
      
      <!-- END Side Overlay -->

      <!-- Sidebar -->
      <!--
        Helper classes

        Adding .smini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding .smini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
          If you would like to disable the transition, just add the .no-transition along with one of the previous 2 classes

        Adding .smini-hidden to an element will hide it when the sidebar is in mini mode
        Adding .smini-visible to an element will show it only when the sidebar is in mini mode
        Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
      -->
      {{-- sidebar --}}
      
      @include('admin.sidebar')

      <!-- END Sidebar -->

      <!-- Header -->
      @include('admin.header')
      <!-- END Header -->

      <!-- Main Container -->
      
      @yield('content')

      <!-- END Main Container -->

      <!-- Footer -->
      
      @include('admin.footer')

      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
        Codebase JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="{{ asset('code/assets/js/codebase.app.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('code/assets/js/plugins/chart.js/chart.umd.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('code/assets/js/pages/be_pages_dashboard.min.js') }}"></script>

    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('code/assets/js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('code/assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('code/assets/js/pages/be_tables_datatables.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('code/assets/js/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('code/assets/js/plugins/jquery-validation/additional-methods.js') }}"></script>

    <!-- Page JS Helpers (Select2 plugin) -->
    <script>Codebase.helpersOnLoad(['jq-select2']);</script>

    <!-- Page JS Code -->
    <script src="{{ asset('code/assets/js/pages/be_forms_validation.min.js') }}"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    @if (session()->has('success'))
    <script>
        swal("Berhasil!","{!!Session::get('success')!!}","success",{
            button:"ok"
        })
    </script>
    @endif

    @if (session()->has('gagal'))
        <script>
            swal("Oopss!","{!!Session::get('gagal')!!}","error",{
                button:"ok"
            })
        </script>
    @endif

<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '.show-alert-delete-box', function(event){
            var form =  $(this).closest("form");

            event.preventDefault();
            swal({
                title: "Apakah anda yakin ingin menghapus data ini ?",
                text: "Jika YA maka Data ini akan terhapus",
                icon: "warning",
                type: "warning",
                buttons: ["Batal","Ok!"],
                confirmButtonColor: '#990000',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    });
</script>

  </body>
</html>