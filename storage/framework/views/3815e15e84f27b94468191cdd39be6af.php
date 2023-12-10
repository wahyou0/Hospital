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
                        <a href="<?php echo e(url('download')); ?>">download</a>
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
                                    <td class="fw-semibold"><?php echo e($data->loket); ?></td>
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
                                    <td colspan="2">Silahkan Di Download Dulu kemudian klik tombol simpan</td>
                                </tr>
                            </tbody>
                        </table>

                        
                    <form action="<?php echo e(url('pendaftaran-pasien/post-step-three')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <input type="text" class="form-control form-control-lg" name="no_rekam_medis" placeholder="" hidden>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control form-control-lg" hidden name="nama_pasien" value="<?php echo e($data->nama_pasien ?? ''); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <input type="text" class="form-control form-control-lg" hidden name="tempat_lahir" value="<?php echo e($data->tempat_lahir ?? ''); ?>">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control form-control-lg" hidden name="tgl_lahir" value="<?php echo e($data->tgl_lahir ?? ''); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-6">
                                
                                        <input type="text" class="form-control form-control-lg" hidden name="nik" value="<?php echo e($data->nik ?? ''); ?>">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control form-control-lg" hidden name="no_hp" value="<?php echo e($data->no_hp ?? ''); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="mb-4">
                                <select class="js-select2 form-select" id="val-select2" hidden name="cara_bayar" required style="width: 100%;" data-placeholder="Choose one..">
                                    <option hidden value="<?php echo e($data->cara_bayar ?? ''); ?>"><?php echo e($data->cara_bayar); ?></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="BRI">BRI</option>
                                    <option value="BNI">BNI</option>
                                    <option value="Mandiri">Mandiri</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="mb-4">
                                <input type="date" class="form-control" hidden name="tgl_kunjungan" value="<?php echo e($data->tgl_kunjungan ?? ''); ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <select class="js-select2 form-select" id="val-select2" hidden name="loket" style="width: 100%;" data-placeholder="Choose one..">
                                            <option hidden value="<?php echo e($data->loket ?? ''); ?>"><?php echo e($data->loket); ?></option><!-- for data-placeholder attribute to work with Select2 plugin -->
                                            <option value="Loket A">Loket A</option>
                                            <option value="Loket B">Loket B</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <select class="js-select2 form-select" id="val-select2" hidden name="poli_tujuan" style="width: 100%;" data-placeholder="Choose one..">
                                            <option hidden value="<?php echo e($data->poli_tujuan ?? ''); ?>"><?php echo e($data->poli_tujuan); ?></option><!-- for data-placeholder attribute to work with Select2 plugin -->
                                            <option value="Loket A">Loket A</option>
                                            <option value="Loket B">Loket B</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="mb-4">
                                <select class="js-select2 form-select" id="val-select2" hidden name="dokter" style="width: 100%;" data-placeholder="Choose one..">
                                    <option hidden value="<?php echo e($data->dokter ?? ''); ?>"><?php echo e($data->dokter); ?></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="Loket A">Loket A</option>
                                    <option value="Loket B">Loket B</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                        <a href="<?php echo e(url('download')); ?>" class="btn btn-alt-primary pull-right">
                            <i class="fa fa-sync-alt opacity-50 me-1"></i> Download
                        </a>
                        
                        <button type="submit" class="btn btn-alt-primary">
                            <i class="fa fa-check opacity-50 me-1"></i> simpan
                        </button>
                        </div>
                    </form>
                    </div>
                    <!-- END Table -->

                    <!-- Footer -->
                    <p class="fa-sm text-muted text-center">
                        Thank you very much for doing business with us. We look forward to working with you again!
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