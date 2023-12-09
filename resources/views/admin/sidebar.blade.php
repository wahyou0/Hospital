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
          <a class="link-fx fw-bold tracking-wide mx-auto" href="index.html">
            <span class="smini-hidden">
              <i class="fa fa-briefcase-medical text-primary"></i>
              <span class="fs-4 text-dual">HOS</span><span class="fs-4 text-primary">PITAL</span>
            </span>
          </a>
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
              <img class="img-avatar" src="{{ asset('storage/'.Auth::user()->image)}}" alt="">
            </a>
            <ul class="list-inline mt-3 mb-0">
              <li class="list-inline-item">
                <a class="link-fx text-dual fs-sm fw-semibold text-uppercase" href="be_pages_generic_profile.html">{{ Auth::user()->username }}</a>
              </li>
              <li class="list-inline-item">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="link-fx text-dual" data-toggle="layout" data-action="dark_mode_toggle" href="javascript:void(0)">
                  <i class="fa fa-moon"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="link-fx text-dual" href="{{ url('logout') }}">
                  <i class="fa fa-sign-out-alt"></i>
                </a>
              </li>
            </ul>
          </div>
          <!-- END Visible only in normal mode -->
        </div>
        <!-- END Side User -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
          <ul class="nav-main">
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{ url('home')}}">
                <i class="nav-main-link-icon fa fa-house-user"></i>
                <span class="nav-main-link-name">Dashboard</span>
              </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="{{ url('layanan') }}">
                  <i class="nav-main-link-icon fa fa-user-doctor"></i>
                  <span class="nav-main-link-name">Layanan</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="{{ url('pendaftaran-pasien/cek')}}">
                  <i class="nav-main-link-icon fa fa-file-pen"></i>
                  <span class="nav-main-link-name">Pendaftaran Pasien</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="{{ url('jadwal-dokter')}}">
                  <i class="nav-main-link-icon fa fa-book-medical"></i>
                  <span class="nav-main-link-name">Jadwal Dokter</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="{{ url('kamar-rawat') }}">
                  <i class="nav-main-link-icon fa fa-clipboard-list"></i>
                  <span class="nav-main-link-name">Info Kamar Rawat</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="{{ url('pendaftaran-pasien') }}">
                  <i class="nav-main-link-icon fa fa-id-card"></i>
                  <span class="nav-main-link-name">Data Pasien</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="#">
                  <i class="nav-main-link-icon fa fa-id-card"></i>
                  <span class="nav-main-link-name">Daftar Dokter</span>
                </a>
            </li>



            {{-- <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-award"></i>
                <span class="nav-main-link-name">Page Kits</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span class="nav-main-link-name">Dashboards</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_dashboard2.html">
                        <span class="nav-main-link-name">Dashboard 2</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_dashboard3.html">
                        <span class="nav-main-link-name">Dashboard 3</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_dashboard4.html">
                        <span class="nav-main-link-name">Dashboard 4</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span class="nav-main-link-name">Alt Dashboards</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="db_classic.html">
                        <span class="nav-main-link-name">Classic</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="db_clean.html">
                        <span class="nav-main-link-name">Clean</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="db_social.html">
                        <span class="nav-main-link-name">Social</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="db_corporate.html">
                        <span class="nav-main-link-name">Corporate</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="db_minimal.html">
                        <span class="nav-main-link-name">Minimal</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="db_pop.html">
                        <span class="nav-main-link-name">Pop</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="db_medical.html">
                        <span class="nav-main-link-name">Medical</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span class="nav-main-link-name">Hosting</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_hosting_dashboard.html">
                        <span class="nav-main-link-name">Dashboard</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_hosting_emails.html">
                        <span class="nav-main-link-name">Emails</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_hosting_account.html">
                        <span class="nav-main-link-name">Account</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_hosting_support.html">
                        <span class="nav-main-link-name">Support</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span class="nav-main-link-name">Real Estate</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_real_estate_dashboard.html">
                        <span class="nav-main-link-name">Dashboard</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_real_estate_listing.html">
                        <span class="nav-main-link-name">Listing</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_real_estate_listing_new.html">
                        <span class="nav-main-link-name">Add New Listing</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span class="nav-main-link-name">Crypto</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_crypto_dashboard.html">
                        <span class="nav-main-link-name">Dashboard</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_crypto_buy_sell.html">
                        <span class="nav-main-link-name">Buy/Sell</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_crypto_wallets.html">
                        <span class="nav-main-link-name">Wallets</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_crypto_settings.html">
                        <span class="nav-main-link-name">Settings</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span class="nav-main-link-name">e-Commerce</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_ecom_dashboard.html">
                        <span class="nav-main-link-name">Dashboard</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_ecom_orders.html">
                        <span class="nav-main-link-name">Orders</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_ecom_order.html">
                        <span class="nav-main-link-name">Order</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_ecom_products.html">
                        <span class="nav-main-link-name">Products</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_ecom_product_edit.html">
                        <span class="nav-main-link-name">Product Edit</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_ecom_customer.html">
                        <span class="nav-main-link-name">Customer</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span class="nav-main-link-name">e-Learning</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_elearning_courses.html">
                        <span class="nav-main-link-name">Courses</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_elearning_course.html">
                        <span class="nav-main-link-name">Course</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_elearning_lesson.html">
                        <span class="nav-main-link-name">Lesson</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span class="nav-main-link-name">Forum</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_forum_categories.html">
                        <span class="nav-main-link-name">Categories</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_forum_topics.html">
                        <span class="nav-main-link-name">Topics</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_forum_discussion.html">
                        <span class="nav-main-link-name">Discussion</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span class="nav-main-link-name">Boxed Backend</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="bd_dashboard.html">
                        <span class="nav-main-link-name">Dashboard</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="bd_search.html">
                        <span class="nav-main-link-name">Search</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="bd_variations_hero_simple_1.html">
                        <span class="nav-main-link-name">Hero Simple 1</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="bd_variations_hero_simple_2.html">
                        <span class="nav-main-link-name">Hero Simple 2</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="bd_variations_hero_simple_3.html">
                        <span class="nav-main-link-name">Hero Simple 3</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="bd_variations_hero_simple_4.html">
                        <span class="nav-main-link-name">Hero Simple 4</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="bd_variations_hero_image_1.html">
                        <span class="nav-main-link-name">Hero Image 1</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="bd_variations_hero_image_2.html">
                        <span class="nav-main-link-name">Hero Image 2</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="bd_variations_hero_image_3.html">
                        <span class="nav-main-link-name">Hero Image 3</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="bd_variations_hero_image_4.html">
                        <span class="nav-main-link-name">Hero Image 4</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="bd_variations_hero_video_1.html">
                        <span class="nav-main-link-name">Hero Video 1</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="bd_variations_hero_video_2.html">
                        <span class="nav-main-link-name">Hero Video 2</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li> --}}

          </ul>
        </div>
        <!-- END Side Navigation -->
      </div>
      <!-- END Sidebar Scrolling -->
    </div>
    <!-- Sidebar Content -->
  </nav>