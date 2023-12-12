<?php $__env->startSection('content'); ?>   
    
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Alternate</h3>
        </div>
        <div class="block-content block-content-full space-y-3">
            
            <div class="row">
                <form class="js-validation" action="<?php echo e(url('pendaftaran-pasien/Post-step-one')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="block block-themed block-rounded">
                        <div class="block-header bg-gd-sea">
                        <h3 class="block-title">Pasien Lama</h3>
                        </div>
                        <div class="block-content">
                            <div class="block-content block-content-full">
                                <!-- Regular -->
                                <div class="row items-push">
                                    <div class="col-lg-10 col-xl-10">
                                        <div class="mb-4">
                                            <input hidden type="text" class="form-control" name="jenis_pasien" value="Pasien Lama">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Rekam Medis/NIK <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control <?php $__errorArgs = ['nik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                is-invalid
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nik" value="<?php echo e($data->nik ?? ''); ?>">
                                                <?php $__errorArgs = ['nik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($message); ?>

                                                    </div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hospital\resources\views/admin/daftar_pasien/create_step_one.blade.php ENDPATH**/ ?>