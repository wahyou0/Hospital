
<?php $__env->startSection('content'); ?>   
    
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Alternate</h3>
        </div>
        <div class="block-content block-content-full space-y-3">
            
            <div class="row">

                <h2 class="content-heading">Step Two</h2>
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                    <h3 class="block-title"><?php echo e($data->jenis_pasien ?? ''); ?></h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                    </div>
                    <div class="block-content">
                    <form action="<?php echo e(url('pendaftaran-pasien/post-step-two')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <label class="form-label">Nomor Rekam Medis</label>
                                            <input type="text" class="form-control form-control-lg" name="no_rekam_medis" value="" placeholder="" readonly>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Nama Pasien</label>
                                            <input type="text" class="form-control form-control-lg" name="nama_pasien" value="<?php echo e($ceknik->nama_pasien); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <label class="form-label">Tempat Lahir</label>
                                            <input type="text" class="form-control form-control-lg" name="tempat_lahir" value="<?php echo e($ceknik->tempat_lahir); ?>">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Tanggal Lahir</label>
                                            <input type="text" class="form-control form-control-lg" name="tgl_lahir" value="<?php echo e($ceknik->tgl_lahir); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <label class="form-label">Nik</label>
                                        <input type="text" class="form-control form-control-lg" name="nik" value="<?php echo e($ceknik->nik ?? ''); ?>">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Kontak Pasien</label>
                                        <input type="text" class="form-control form-control-lg" name="no_hp" value="<?php echo e($ceknik->no_hp ?? ''); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="mb-4">
                                <label class="form-label" for="val-select2">Pilih Cara Bayar <span class="text-danger">*</span></label>
                                <select class="js-select2 form-select" id="val-select2" name="cara_bayar" required style="width: 100%;" data-placeholder="Choose one..">
                                    <option hidden value="<?php echo e($data->cara_bayar ?? ''); ?>"><?php echo e($data->cara_bayar); ?></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="BRI">BRI</option>
                                    <option value="BNI">BNI</option>
                                    <option value="Mandiri">Mandiri</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="mb-4">
                                <label class="form-label">Tanggal Kunjungan<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="tgl_kunjungan" value="<?php echo e($data->tgl_kunjungan ?? ''); ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <label class="form-label">Poli Klinik tujuan <span class="text-danger">*</span></label>
                                        <select class="js-select2 form-select" name="loket" required style="width: 100%;" data-placeholder="Choose one..">
                                            <option hidden value="<?php echo e($data->loket ?? ''); ?>"><?php echo e($data->loket); ?></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                            <option value="Loket A">Loket A</option>
                                            <option value="Loket B">Loket B</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Klinik <span class="text-danger">*</span></label>
                                        <select class="js-select2 form-select" name="poli_tujuan" required style="width: 100%;" data-placeholder="Choose one..">
                                            <option hidden value="<?php echo e($data->poli_tujuan ?? ''); ?>"><?php echo e($data->poli_tujuan); ?></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                            <option value="Gigi">Gigi</option>
                                            <option value="Anak">Anak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="mb-4">
                                <label class="form-label">Dokter</label>
                                <select class="js-select2 form-select" name="dokter" required style="width: 100%;" data-placeholder="Choose one..">
                                    <option hidden value="<?php echo e($data->dokter ?? ''); ?>"><?php echo e($data->dokter); ?></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="Dokter A">Dokter A</option>
                                    <option value="Dokter B">Dokter B</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                        <a href="<?php echo e(url('pendaftaran-pasien/create-step-one')); ?>" class="btn btn-danger pull-right">
                            <i class="fa fa-sync-alt opacity-50 me-1"></i> Kembali
                        </a>
                        
                        <button type="submit" class="btn btn-alt-primary">
                            <i class="fa fa-check opacity-50 me-1"></i> Lanjut
                        </button>
                        <button type="reset" class="btn btn-alt-secondary">
                            <i class="fa fa-sync-alt opacity-50 me-1"></i> Reset
                        </button>
                        </div>
                    </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hospital\resources\views/admin/daftar_pasien/create_step_two.blade.php ENDPATH**/ ?>