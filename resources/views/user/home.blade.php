@extends('user.dashboard')
@section('content')

<div class="bg-body-extra-light">
    <!-- Breadcrumb -->
    {{-- <div class="content">
      <nav class="breadcrumb push rounded-pill px-4 py-2 mb-0">
        <a class="breadcrumb-item" href="javascript:void(0)">Home</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>
    </div> --}}
    <!-- END Breadcrumb -->

    <!-- Content -->
    <div class="content">
      <!-- Icon Navigation -->
      {{-- <div class="row">
        <div class="col-6 col-md-4 col-xl-2">
        </div>
        <div class="col-6 col-md-4 col-xl-2">
          <a class="block block-rounded block-bordered block-link-shadow ribbon ribbon-primary text-center" href="javascript:void(0)">
            <div class="ribbon-box">5</div>
            <div class="block-content">
              <p class="mt-1 mb-2">
                <i class="si si-envelope fa-2x text-muted"></i>
              </p>
              <p class="fw-semibold">Inbox</p>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
          <a class="block block-rounded block-bordered block-link-shadow text-center" href="javascript:void(0)">
            <div class="block-content">
              <p class="mt-1 mb-2">
                <i class="si si-bag fa-2x text-muted"></i>
              </p>
              <p class="fw-semibold">Cart</p>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
          <a class="block block-rounded block-bordered block-link-shadow text-center" href="javascript:void(0)">
            <div class="block-content">
              <p class="mt-1 mb-2">
                <i class="si si-bar-chart fa-2x text-muted"></i>
              </p>
              <p class="fw-semibold">Statistics</p>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
          <a class="block block-rounded block-bordered block-link-shadow ribbon ribbon-primary text-center" href="javascript:void(0)">
            <div class="ribbon-box">3</div>
            <div class="block-content">
              <p class="mt-1 mb-2">
                <i class="si si-cloud-download fa-2x text-muted"></i>
              </p>
              <p class="fw-semibold">Downloads</p>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
          <a class="block block-rounded block-bordered block-link-shadow text-center" href="javascript:void(0)">
            <div class="block-content">
              <p class="mt-1 mb-2">
                <i class="si si-docs fa-2x text-muted"></i>
              </p>
              <p class="fw-semibold">Documents</p>
            </div>
          </a>
        </div>
      </div> --}}
      <!-- END Icon Navigation -->

      <!-- Mini Stats -->
      <div class="row">
        <div class="col-md-6 col-xl-4">
            <a class="block block-rounded block-bordered" href="#">
                <div class="block-content p-2">
                  <div class="py-4 text-center bg-body-light rounded">
                    <div class="fs-2 fw-bold mb-0">
                      @if ( $no_antrian == null)
                          {{ "0" }}
                      @else
                        {{ $no_antrian->no_antrian}}
                      @endif
                    </div>
                    <div class="fs-sm fw-semibold text-uppercase text-muted">queue to</div>
                  </div>
                </div>
              </a>
        </div>
        <div class="col-md-6 col-xl-4">
          <a class="block block-rounded block-bordered" href="javascript:void(0)">
            <div class="block-content p-2">
              <div class="py-4 text-center bg-body-light rounded">
                <div class="fs-2 fw-bold mb-0">{{ $antrian }}</div>
                <div class="fs-sm fw-semibold text-uppercase text-muted">Number of Queues</div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-xl-4">
          <a class="block block-rounded block-bordered" href="javascript:void(0)">
            <div class="block-content p-2">
              <div class="py-4 text-center bg-body-light rounded">
                <div class="fs-2 fw-bold mb-0">{{ $pasien}}</div>
                <div class="fs-sm fw-semibold text-uppercase text-muted">number of patients</div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- END Mini Stats -->


      <!-- More Data -->
      <div class="row">
        <!-- Latest Orders -->
        {{-- <div class="col-xl-6">
          <div class="block block-rounded block-bordered">
            <div class="block-header">
              <h3 class="block-title text-uppercase">Latest Orders</h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option">
                  <i class="si si-wrench"></i>
                </button>
              </div>
            </div>
            <div class="block-content block-content-full">
              <table class="table table-borderless table-striped mb-0">
                <thead>
                  <tr>
                    <th style="width: 100px;">ID</th>
                    <th>Status</th>
                    <th class="d-none d-sm-table-cell">Customer</th>
                    <th class="text-end">Value</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a class="fw-semibold" href="javascript:void(0)">ORD.1851</a>
                    </td>
                    <td>
                      <span class="badge bg-danger">Canceled</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <a href="javascript:void(0)">Jose Parker</a>
                    </td>
                    <td class="text-end">$203</td>
                  </tr>
                  <tr>
                    <td>
                      <a class="fw-semibold" href="javascript:void(0)">ORD.1850</a>
                    </td>
                    <td>
                      <span class="badge bg-warning">Pending</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <a href="javascript:void(0)">Jose Parker</a>
                    </td>
                    <td class="text-end">$842</td>
                  </tr>
                  <tr>
                    <td>
                      <a class="fw-semibold" href="javascript:void(0)">ORD.1849</a>
                    </td>
                    <td>
                      <span class="badge bg-danger">Canceled</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <a href="javascript:void(0)">Betty Kelley</a>
                    </td>
                    <td class="text-end">$151</td>
                  </tr>
                  <tr>
                    <td>
                      <a class="fw-semibold" href="javascript:void(0)">ORD.1848</a>
                    </td>
                    <td>
                      <span class="badge bg-success">Completed</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <a href="javascript:void(0)">Barbara Scott</a>
                    </td>
                    <td class="text-end">$688</td>
                  </tr>
                  <tr>
                    <td>
                      <a class="fw-semibold" href="javascript:void(0)">ORD.1847</a>
                    </td>
                    <td>
                      <span class="badge bg-danger">Canceled</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <a href="javascript:void(0)">Susan Day</a>
                    </td>
                    <td class="text-end">$963</td>
                  </tr>
                  <tr>
                    <td>
                      <a class="fw-semibold" href="javascript:void(0)">ORD.1846</a>
                    </td>
                    <td>
                      <span class="badge bg-success">Completed</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <a href="javascript:void(0)">Susan Day</a>
                    </td>
                    <td class="text-end">$836</td>
                  </tr>
                  <tr>
                    <td>
                      <a class="fw-semibold" href="javascript:void(0)">ORD.1845</a>
                    </td>
                    <td>
                      <span class="badge bg-info">Processing</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <a href="javascript:void(0)">Alice Moore</a>
                    </td>
                    <td class="text-end">$616</td>
                  </tr>
                  <tr>
                    <td>
                      <a class="fw-semibold" href="javascript:void(0)">ORD.1844</a>
                    </td>
                    <td>
                      <span class="badge bg-warning">Pending</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <a href="javascript:void(0)">Sara Fields</a>
                    </td>
                    <td class="text-end">$162</td>
                  </tr>
                  <tr>
                    <td>
                      <a class="fw-semibold" href="javascript:void(0)">ORD.1843</a>
                    </td>
                    <td>
                      <span class="badge bg-info">Processing</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <a href="javascript:void(0)">Betty Kelley</a>
                    </td>
                    <td class="text-end">$683</td>
                  </tr>
                  <tr>
                    <td>
                      <a class="fw-semibold" href="javascript:void(0)">ORD.1842</a>
                    </td>
                    <td>
                      <span class="badge bg-info">Processing</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <a href="javascript:void(0)">Megan Fuller</a>
                    </td>
                    <td class="text-end">$240</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div> --}}
        <!-- END Latest Orders -->

        <!-- Top Products -->
        {{-- <div class="col-xl-6">
          <div class="block block-rounded block-bordered">
            <div class="block-header">
              <h3 class="block-title text-uppercase">Top Products</h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option">
                  <i class="si si-wrench"></i>
                </button>
              </div>
            </div>
            <div class="block-content block-content-full">
              <table class="table table-borderless table-striped mb-0">
                <thead>
                  <tr>
                    <th class="d-none d-sm-table-cell" style="width: 100px;">ID</th>
                    <th>Product</th>
                    <th class="text-center">Orders</th>
                    <th class="d-none d-sm-table-cell text-center">Rating</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="d-none d-sm-table-cell">
                      <a class="fw-semibold" href="javascript:void(0)">PID.258</a>
                    </td>
                    <td>
                      <a href="javascript:void(0)">Dark Souls III</a>
                    </td>
                    <td class="text-center">
                      <a class="text-gray-dark" href="javascript:void(0)">912</a>
                    </td>
                    <td class="d-none d-sm-table-cell text-center">
                      <div class="text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-none d-sm-table-cell">
                      <a class="fw-semibold" href="javascript:void(0)">PID.198</a>
                    </td>
                    <td>
                      <a href="javascript:void(0)">Bioshock Collection</a>
                    </td>
                    <td class="text-center">
                      <a class="text-gray-dark" href="javascript:void(0)">895</a>
                    </td>
                    <td class="d-none d-sm-table-cell text-center">
                      <div class="text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-none d-sm-table-cell">
                      <a class="fw-semibold" href="javascript:void(0)">PID.852</a>
                    </td>
                    <td>
                      <a href="javascript:void(0)">Alien Isolation</a>
                    </td>
                    <td class="text-center">
                      <a class="text-gray-dark" href="javascript:void(0)">820</a>
                    </td>
                    <td class="d-none d-sm-table-cell text-center">
                      <div class="text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-none d-sm-table-cell">
                      <a class="fw-semibold" href="javascript:void(0)">PID.741</a>
                    </td>
                    <td>
                      <a href="javascript:void(0)">Bloodborne</a>
                    </td>
                    <td class="text-center">
                      <a class="text-gray-dark" href="javascript:void(0)">793</a>
                    </td>
                    <td class="d-none d-sm-table-cell text-center">
                      <div class="text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-none d-sm-table-cell">
                      <a class="fw-semibold" href="javascript:void(0)">PID.985</a>
                    </td>
                    <td>
                      <a href="javascript:void(0)">Forza Motorsport 7</a>
                    </td>
                    <td class="text-center">
                      <a class="text-gray-dark" href="javascript:void(0)">782</a>
                    </td>
                    <td class="d-none d-sm-table-cell text-center">
                      <div class="text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-none d-sm-table-cell">
                      <a class="fw-semibold" href="javascript:void(0)">PID.056</a>
                    </td>
                    <td>
                      <a href="javascript:void(0)">Fifa 18</a>
                    </td>
                    <td class="text-center">
                      <a class="text-gray-dark" href="javascript:void(0)">776</a>
                    </td>
                    <td class="d-none d-sm-table-cell text-center">
                      <div class="text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-none d-sm-table-cell">
                      <a class="fw-semibold" href="javascript:void(0)">PID.036</a>
                    </td>
                    <td>
                      <a href="javascript:void(0)">Gears of War 4</a>
                    </td>
                    <td class="text-center">
                      <a class="text-gray-dark" href="javascript:void(0)">680</a>
                    </td>
                    <td class="d-none d-sm-table-cell text-center">
                      <div class="text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-none d-sm-table-cell">
                      <a class="fw-semibold" href="javascript:void(0)">PID.682</a>
                    </td>
                    <td>
                      <a href="javascript:void(0)">Minecraft</a>
                    </td>
                    <td class="text-center">
                      <a class="text-gray-dark" href="javascript:void(0)">670</a>
                    </td>
                    <td class="d-none d-sm-table-cell text-center">
                      <div class="text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-none d-sm-table-cell">
                      <a class="fw-semibold" href="javascript:void(0)">PID.478</a>
                    </td>
                    <td>
                      <a href="javascript:void(0)">Dishonored 2</a>
                    </td>
                    <td class="text-center">
                      <a class="text-gray-dark" href="javascript:void(0)">640</a>
                    </td>
                    <td class="d-none d-sm-table-cell text-center">
                      <div class="text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-none d-sm-table-cell">
                      <a class="fw-semibold" href="javascript:void(0)">PID.952</a>
                    </td>
                    <td>
                      <a href="javascript:void(0)">Gran Turismo Sport</a>
                    </td>
                    <td class="text-center">
                      <a class="text-gray-dark" href="javascript:void(0)">630</a>
                    </td>
                    <td class="d-none d-sm-table-cell text-center">
                      <div class="text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div> --}}
        <!-- END Top Products -->
      </div>
      <!-- END More Data -->
    </div>
    <!-- END Content -->
  </div>

@endsection