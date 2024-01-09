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
    <link rel="stylesheet" id="css-main" href="<?php echo e(asset('code/assets/css/codebase.min.css')); ?>">

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
                
                <div class="block block-rounded">
                    
                    <div class="block-content">
                    <!-- Invoice Info -->
                    
                    <!-- END Invoice Info -->

                    <!-- Table -->
                    <div class="table-responsive push">
                        <table class="table table-bordered table-vcenter table-hover js-dataTable-buttons">
                            <tbody>
                                <tr>
                                    <td>Nomor Registrasi</td>
                                    <td class="fw-semibold"><?php echo e($data->no_registrasi); ?></td>
                                </tr>
                                <tr>
                                    <td>Nomor Antrian</td>
                                    <td class="fw-semibold"><?php echo e($data->no_antrian); ?></td>
                                </tr>
                                    <td>Loket Antrian</td>
                                    <td class="fw-semibold">Loket <?php echo e($data->loket); ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Pasien</td>
                                    <td class="fw-semibold"><?php echo e($data->jenis_pasien); ?></td>
                                </tr>
                                <tr>
                                    <td>No. Rekam Medis</td>
                                    <td class="fw-semibold"><?php echo e($data->no_rekam_medis); ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Pasien</td>
                                    <td class="fw-semibold"><?php echo e($data->nama_pasien); ?></td>
                                </tr>
                                <tr>
                                    <td>NIK Pasien</td>
                                    <td class="fw-semibold"><?php echo e($data->nik); ?></td>
                                </tr>
                                <tr>
                                    <td>Tempat / Tgl. Lahir</td>
                                    <td class="fw-semibold"><?php echo e($data->tempat_lahir); ?>/<?php echo e($data->tgl_lahir); ?></td>
                                </tr>
                                <tr>
                                    <td>Kontak Pasien</td>
                                    <td class="fw-semibold"><?php echo e($data->no_hp); ?></td>
                                </tr>
                                <tr>
                                    <td>Cara Bayar</td>
                                    <td class="fw-semibold"><?php echo e($data->cara_bayar); ?></td>
                                </tr>
                                <tr>
                                    <td>Poliklinik Tujuan</td>
                                    <td class="fw-semibold"><?php echo e($data->poli_tujuan); ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal kunjungan</td>
                                    <td class="fw-semibold"><?php echo e($data->tgl_kunjungan); ?></td>
                                </tr>
                                <tr class="table-warning">
                                    <td colspan="2">Silahkan Di Download </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a href="<?php echo e(url('download')); ?>" class="btn btn-alt-primary pull-right">
                                            <i class="fa fa-download opacity-50 me-1"></i> Download
                                        </a>
                                        <a href="<?php echo e(url('pendaftaran-pasien/cek')); ?>" class="btn btn-alt-success pull-right">
                                            <i class="fa fa-circle-left opacity-50 me-1"></i> Back
                                        </a>
                                    </td>
                                </tr>
                                
                            </tbody>
                           
                        </table>

                        
                    
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

    <script src="<?php echo e(asset('code/assets/js/codebase.app.min.js')); ?>"></script>
    
  </body>
</html><?php /**PATH C:\xampp\htdocs\Hospital\resources\views/admin/daftar_pasien/create_step_three.blade.php ENDPATH**/ ?>