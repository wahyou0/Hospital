<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Codebase - Bootstrap 5 Admin Template &amp; UI Framework</title>

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


    <div id="page-container" class="sidebar-0 enable-page-overlay side-scroll page-header-modern main-content-boxed">
        <main id="main-container">

        <!-- Page Content -->
            <div class="content">
                <div class="block-content block-content-full space-y-3">
                <div class="col-md-12">
                <!-- Invoice -->
                {{-- <h2 class="content-heading d-print-none d-flex justify-content-between align-items-center">
                    <span>Invoice</span>
                    <button type="button" class="btn btn-sm btn-primary">New Invoice</button>
                </h2> --}}
                <div class="block block-rounded">
                    {{-- <div class="block-header block-header-default">
                    <h3 class="block-title">#INV0015</h3>
                    <div class="block-options">
                        <!-- Print Page functionality is initialized in Helpers.cbPrint() -->
                        <button type="button" class="btn-block-option" onclick="Codebase.helpers('cb-print');">
                            <i class="si si-printer"></i>
                        </button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                    </div> --}}
                    <div class="block-content">
                    <!-- Invoice Info -->
                    
                    <!-- END Invoice Info -->

                    <!-- Table -->
                    <div class="table-responsive push">
                        <table class="table table-bordered table-vcenter table-hover js-dataTable-buttons">
                            <tbody>
                                <tr>
                                    <td>Nomor Registrasi</td>
                                    <td class="fw-semibold">{{ $data->no_registrasi}}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Antrian</td>
                                    <td class="fw-semibold">{{ $data->no_antrian }}</td>
                                </tr>
                                    <td>Loket Antrian</td>
                                    <td class="fw-semibold">Loket {{ $data->loket }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Pasien</td>
                                    <td class="fw-semibold">{{ $data->jenis_pasien }}</td>
                                </tr>
                                <tr>
                                    <td>No. Rekam Medis</td>
                                    <td class="fw-semibold">{{ $data->no_rekam_medis }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Pasien</td>
                                    <td class="fw-semibold">{{ $data->nama_pasien }}</td>
                                </tr>
                                <tr>
                                    <td>NIK Pasien</td>
                                    <td class="fw-semibold">{{ $data->nik }}</td>
                                </tr>
                                <tr>
                                    <td>Tempat / Tgl. Lahir</td>
                                    <td class="fw-semibold">{{ $data->tempat_lahir }}/{{ $data->tgl_lahir}}</td>
                                </tr>
                                <tr>
                                    <td>Kontak Pasien</td>
                                    <td class="fw-semibold">{{ $data->no_hp }}</td>
                                </tr>
                                <tr>
                                    <td>Cara Bayar</td>
                                    <td class="fw-semibold">{{ $data->cara_bayar }}</td>
                                </tr>
                                <tr>
                                    <td>Poliklinik Tujuan</td>
                                    <td class="fw-semibold">{{ $data->poli_tujuan }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal kunjungan</td>
                                    <td class="fw-semibold">{{ $data->tgl_kunjungan }}</td>
                                </tr>
                                <tr class="table-warning">
                                    <td colspan="2">Silahkan Di Download </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a href="{{ url('download') }}" class="btn btn-alt-primary pull-right">
                                            <i class="fa fa-download opacity-50 me-1"></i> Download
                                        </a>
                                        <a href="{{ url('pendaftaran-pasien/cek') }}" class="btn btn-alt-success pull-right">
                                            <i class="fa fa-circle-left opacity-50 me-1"></i> Back
                                        </a>
                                    </td>
                                </tr>
                                
                            </tbody>
                           
                        </table>

                        
                    {{-- <form action="{{ url('pendaftaran-pasien/post-step-three') }}" method="POST">
                        @csrf
                            <input type="text" class="form-control form-control-lg" name="no_rekam_medis" placeholder="" hidden>
                            <input type="text" class="form-control form-control-lg" hidden name="nama_pasien" value="{{ $data->nama_pasien ?? '' }}">
                            <input type="text" class="form-control form-control-lg" hidden name="tempat_lahir" value="{{ $data->tempat_lahir ?? '' }}">
                            <input type="text" class="form-control form-control-lg" hidden name="tgl_lahir" value="{{ $data->tgl_lahir ?? '' }}">
                            <input type="text" class="form-control form-control-lg" hidden name="nik" value="{{ $data->nik ?? ''}}">
                            <input type="text" class="form-control form-control-lg" hidden name="no_hp" value="{{ $data->no_hp ?? '' }}">
                            <select class="js-select2 form-select" id="val-select2" hidden name="cara_bayar" required style="width: 100%;" data-placeholder="Choose one..">
                                <option hidden value="{{ $data->cara_bayar ?? '' }}">{{ $data->cara_bayar }}</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <option value="BRI">BRI</option>
                                <option value="BNI">BNI</option>
                                <option value="Mandiri">Mandiri</option>
                            <input type="date" class="form-control" hidden name="tgl_kunjungan" value="{{ $data->tgl_kunjungan ?? '' }}">
                            <select class="js-select2 form-select" id="val-select2" hidden name="loket" style="width: 100%;" data-placeholder="Choose one..">
                                <option hidden value="{{ $data->loket ?? '' }}">{{ $data->loket }}</option><!-- for data-placeholder attribute to work with Select2 plugin -->
                                <option value="Loket A">Loket A</option>
                                <option value="Loket B">Loket B</option>
                            </select>
                            <select class="js-select2 form-select" id="val-select2" hidden name="poli_tujuan" style="width: 100%;" data-placeholder="Choose one..">
                                <option hidden value="{{ $data->poli_tujuan ?? '' }}">{{ $data->poli_tujuan }}</option><!-- for data-placeholder attribute to work with Select2 plugin -->
                                <option value="Loket A">Loket A</option>
                                <option value="Loket B">Loket B</option>
                            </select>
                            <select class="js-select2 form-select" id="val-select2" hidden name="dokter" style="width: 100%;" data-placeholder="Choose one..">
                                <option hidden value="{{ $data->dokter ?? '' }}">{{ $data->dokter }}</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <option value="Loket A">Loket A</option>
                                <option value="Loket B">Loket B</option>
                            </select>
                        <div class="mb-4">
                        <a href="{{ url('download') }}" class="btn btn-alt-primary pull-right">
                            <i class="fa fa-sync-alt opacity-50 me-1"></i> Download
                        </a><a href="{{ url('pendaftaran-pasien/cek') }}" class="btn btn-alt-primary pull-right">
                            <i class="fa fa-sync-alt opacity-50 me-1"></i> Back
                        </a>
                        
                        <button type="submit" class="btn btn-alt-primary">
                            <i class="fa fa-check opacity-50 me-1"></i> Back
                        </button>
                        </div>
                    </form> --}}
                    </div>
                    <!-- END Table -->

                    <!-- Footer -->
                    <p class="fa-sm text-muted text-center">
                        Thank you very much 
                    </p>
                    <!-- END Footer -->
                    </div>
                </div>
                <!-- END Invoice -->
                    </div>
                </div>
            </div>
        <!-- END Page Content -->
      </main>
    </div>

    <script src="{{ asset('code/assets/js/codebase.app.min.js') }}"></script>
    
  </body>
</html>