<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
      <!-- Side Header -->
      <div class="content-header justify-content-lg-center">
        <!-- Logo -->
        <div>
          <span class="smini-visible fw-bold tracking-wide fs-lg">
            c<span class="text-primary">b</span>
          </span>
              <img src="<?php echo e(asset('/logo/logo_unhas.png')); ?>" alt="" style="width: 9mm; position:center">
              <span class="fs-3 text-dual fw-bold">HOS</span><span class="fs-3 text-primary fw-bold">PITAL</span>
        </div>
        <!-- END Logo -->

        <!-- Options -->
        <div>
          <!-- Close Sidebar, Visible only on mobile screens -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
            <i class="fa fa-fw fa-times"></i>
          </button>
          <!-- END Close Sidebar -->
        </div>
        <!-- END Options -->
      </div>
      <!-- END Side Header -->

      <!-- Sidebar Scrolling -->
      <div class="js-sidebar-scroll">
        <!-- Side User -->
        <div class="content-side content-side-user px-0 py-0">
          <!-- Visible only in mini mode -->
          <div class="smini-visible-block animated fadeIn px-3">
            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
          </div>
          <!-- END Visible only in mini mode -->

          <!-- Visible only in normal mode -->
          <div class="smini-hidden text-center mx-auto">
            <a class="img-link" href="be_pages_generic_profile.html">
              <img class="img-avatar" src="<?php echo e(asset('storage/'.Auth::user()->image)); ?>" alt="">
            </a>
            <ul class="list-inline mt-3 mb-0">
              <li class="list-inline-item">
                <a class="link-fx text-dual fs-sm fw-semibold text-uppercase" href="be_pages_generic_profile.html"><?php echo e(Auth::user()->name); ?></a>
              </li>
              <li class="list-inline-item">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="link-fx text-dual" data-toggle="layout" data-action="dark_mode_toggle" href="javascript:void(0)">
                  <i class="fa fa-moon"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="link-fx text-dual" href="<?php echo e(url('logout')); ?>">
                  <i class="fa fa-sign-out-alt"></i>
                </a>
              </li>
            </ul>
          </div>
          <!-- END Visible only in normal mode -->
        </div>
        <!-- END Side User -->

        <!-- Side Navigation -->
        <?php
          $a = Auth::user()->level ;
        ?>
        <?php if( $a == '1' ): ?>
          
 
        <div class="content-side content-side-full">
          <ul class="nav-main">
            <li class="nav-main-item">
              <a class="nav-main-link" href="<?php echo e(url('home')); ?>">
                <i class="nav-main-link-icon fa fa-house-user"></i>
                <span class="nav-main-link-name">Dashboard</span>
              </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo e(url('layanan')); ?>">
                  <i class="nav-main-link-icon fa fa-user-doctor"></i>
                  <span class="nav-main-link-name">Service</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo e(url('pendaftaran-pasien/cek')); ?>">
                  <i class="nav-main-link-icon fa fa-file-pen"></i>
                  <span class="nav-main-link-name">Patient Registration</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo e(url('jadwal-dokter')); ?>">
                  <i class="nav-main-link-icon fa fa-book-medical"></i>
                  <span class="nav-main-link-name">Doctor's Schedule</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo e(url('kamar-rawat')); ?>">
                  <i class="nav-main-link-icon fa fa-clipboard-list"></i>
                  <span class="nav-main-link-name">Medical ward info</span>
                </a>
            </li>
            
            
            <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-id-card"></i>
                <span class="nav-main-link-name">Patient</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="<?php echo e(url('data-pasien')); ?>">
                    <span class="nav-main-link-name">Patient Data</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="<?php echo e(url('instalasi')); ?>">
                    <span class="nav-main-link-name">Patient Installation</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo e(url('daftar-antrian')); ?>">
                  <i class="nav-main-link-icon fa fa-clipboard-list"></i>
                  <span class="nav-main-link-name">Queue list</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo e(url('loket')); ?>">
                  <i class="nav-main-link-icon fa fa-list"></i>
                  <span class="nav-main-link-name">counter</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo e(url('report')); ?>">
                  <i class="nav-main-link-icon fa fa-file-lines"></i>
                  <span class="nav-main-link-name">Patient Report</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo e(url('auth')); ?>">
                  <i class="nav-main-link-icon fa fa-user"></i>
                  <span class="nav-main-link-name">Auth</span>
                </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-user-lock"></i>
                <span class="nav-main-link-name">Register</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="<?php echo e(url('register')); ?>">
                    <span class="nav-main-link-name">Admin</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="<?php echo e(url('register-dokter')); ?>">
                    <span class="nav-main-link-name">Doctor</span>
                  </a>
                </li>
              </ul>
            </li>

            <?php elseif($a == '2'): ?>

              <div class="content-side content-side-full">
                <ul class="nav-main">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="<?php echo e(url('home-dokter')); ?>">
                      <i class="nav-main-link-icon fa fa-house-user"></i>
                      <span class="nav-main-link-name">Dashboard</span>
                    </a>
                  </li>
                  
                  <li class="nav-main-item">
                      <a class="nav-main-link" href="<?php echo e(url('daftar-pasien-dokter')); ?>">
                        <i class="nav-main-link-icon fa fa-id-card"></i>
                        <span class="nav-main-link-name">Patient</span>
                      </a>
                  </li>
                  <li class="nav-main-item">
                      <a class="nav-main-link" href="<?php echo e(url('jadwal')); ?>">
                        <i class="nav-main-link-icon fa fa-book-medical"></i>
                        <span class="nav-main-link-name">Doctor's Schedule</span>
                      </a>
                  </li>

            <?php endif; ?>

          </ul>
        </div>
        <!-- END Side Navigation -->
      </div>
      <!-- END Sidebar Scrolling -->
    </div>
    <!-- Sidebar Content -->
  </nav><?php /**PATH C:\xampp\htdocs\Hospital\resources\views/admin/sidebar.blade.php ENDPATH**/ ?>