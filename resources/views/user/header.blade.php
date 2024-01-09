<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
      <!-- Left Section -->
      <div class="d-flex align-items-center space-x-3">
        <!-- Logo -->
        
        <a class="link-fx fw-semibold" href="{{ url('/')}}">
          <img src="{{ asset('/logo/logo_unhas.png')}}" alt="" style="width: 8mm">
          <span class="text-dual">Hos</span><span class="text-primary">pital</span>
        </a>
        <!-- END Logo -->

        <!-- Header Navigation -->
        <!-- Desktop Navigation, mobile navigation can be found in #sidebar -->
        <ul class="nav-main nav-main-horizontal nav-main-hover d-none d-lg-block">
          <li class="nav-main-item">
            <a class="nav-main-link active" href="{{ url('/') }}">
              <i class="nav-main-link-icon si si-home"></i>
              <span class="nav-main-link-name">Home</span>
            </a>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link active" href="{{ url('layanan-hospital') }}">
              <i class="nav-main-link-icon fa fa-clipboard-list"></i>
              <span class="nav-main-link-name">Service</span>
            </a>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link active" href="{{ url('info-kamar-rawat') }}">
              <i class="nav-main-link-icon fa fa-bed"></i>
              <span class="nav-main-link-name">Medical ward info</span>
            </a>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link active" href="{{ url('daftar-jadwal-dokter') }}">
              <i class="nav-main-link-icon fa fa-user-doctor"></i>
              <span class="nav-main-link-name">Doctor's Schedule</span>
            </a>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" href="">
              <i class="nav-main-link-icon fa fa-cog"></i>
              <span class="nav-main-link-name">Settings</span>
            </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ url('login')}}">
                        <span class="nav-main-link-name">Login</span>
                    </a>
                    </li>
                </ul>
          </li>
        </ul>
        <!-- END Header Navigation -->
      </div>
      <!-- END Left Section -->

      <!-- Right Section -->
      <div class="space-x-1">
        <!-- Open Search Section -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        {{-- <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="header_search_on">
          <i class="fa fa-fw fa-search opacity-50 me-1"></i>
          <span>Search</span>
        </button> --}}
        <!-- END Open Search Section -->

        <!-- Toggle Sidebar -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
          <i class="fa fa-fw fa-bars"></i>
        </button>
        <!-- END Toggle Sidebar -->
      </div>
      <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header bg-body-extra-light">
      <div class="content-header">
        <form class="w-100" action="be_pages_generic_search.html" method="POST">
          <div class="input-group">
            <!-- Close Search Section -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
              <i class="fa fa-fw fa-times"></i>
            </button>
            <!-- END Close Search Section -->
            <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
            <button type="submit" class="btn btn-secondary">
              <i class="fa fa-fw fa-search"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
    <!-- END Header Search -->

    <!-- Header Loader -->
    <div id="page-header-loader" class="overlay-header bg-primary">
      <div class="content-header">
        <div class="w-100 text-center">
          <i class="far fa-sun fa-spin text-white"></i>
        </div>
      </div>
    </div>
    <!-- END Header Loader -->
  </header>