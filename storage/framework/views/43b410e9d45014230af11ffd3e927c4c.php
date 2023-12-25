<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
      <!-- Left Section -->
      <div class="space-x-1">
        <!-- Toggle Sidebar -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
          <i class="fa fa-fw fa-bars"></i>
        </button>
        <!-- END Toggle Sidebar -->

        <!-- Open Search Section -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        
        <!-- END Open Search Section -->

        <!-- Color Themes -->
        
        <!-- END Color Themes -->
      </div>
      <!-- END Left Section -->

      <!-- Right Section -->
      <div class="space-x-1">
        <!-- User Dropdown -->
        <div class="dropdown d-inline-block">
          <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user d-sm-none"></i>
            <span class="d-none d-sm-inline-block fw-semibold"><?php echo e(Auth::user()->username); ?></span>
            <i class="fa fa-angle-down opacity-50 ms-1"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
            <div class="px-2 py-3 bg-body-light rounded-top">
              <h5 class="h6 text-center mb-0">
                <?php
                  $a = Auth::user()->level;
                ?>
                <?php if($a == '1'): ?>
                  Admin
                <?php else: ?>
                  Dokter
                <?php endif; ?>
              </h5>
            </div>
            
          </div>
        </div>
        <!-- END User Dropdown -->

        <!-- Notifications -->
        
        <!-- END Notifications -->

        <!-- Toggle Side Overlay -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->

        
        

        <!-- END Toggle Side Overlay -->
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
    <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
    <div id="page-header-loader" class="overlay-header bg-primary">
      <div class="content-header">
        <div class="w-100 text-center">
          <i class="far fa-sun fa-spin text-white"></i>
        </div>
      </div>
    </div>
    <!-- END Header Loader -->
  </header><?php /**PATH C:\xampp\htdocs\Hospital\resources\views/admin/header.blade.php ENDPATH**/ ?>