
<?php $__env->startSection('content'); ?>   
    
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Alternate</h3>
        </div>
        <div class="block-content block-content-full space-y-3">
            
            <div class="row">
                <form class="js-validation" action="<?php echo e(url('pendaftaran-pasien/Post-step-one-baru')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="block block-themed block-rounded">
                        <div class="block-header bg-gd-sea">
                        <h3 class="block-title">Pasien Baru</h3>
                        </div>
                        <div class="block-content">
                            <div class="block-content block-content-full">
                                <!-- Regular -->
                                <div class="row items-push">
                                    <div class="col-lg-10 col-xl-10">
                                        <div class="mb-4">
                                            <input hidden type="text" class="form-control" name="jenis_pasien" value="Pasien Baru">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Nama Pasien <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="nama_pasien" value="<?php echo e($data->nama_pasien ?? ''); ?>">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Tempat Lahir<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="tempat_lahir" value="<?php echo e($data->tempat_lahir ?? ''); ?>">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name="tgl_lahir" value="<?php echo e($data->tgl_lahir ?? ''); ?>">
                                        </div>
                                        <button type="submit" class="btn btn-alt-primary">
                                            <i class="fa fa-check opacity-50 me-1"></i> Lanjut
                                        </button>
                                        <button type="reset" class="btn btn-alt-secondary">
                                            <i class="fa fa-sync-alt opacity-50 me-1"></i> Reset
                                        </button>
                                    </div>
                                </div>
                                <!-- END Regular -->
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hospital\resources\views/admin/daftar_pasien/create_step_one_baru.blade.php ENDPATH**/ ?>