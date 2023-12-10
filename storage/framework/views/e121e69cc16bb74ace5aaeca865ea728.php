
<?php $__env->startSection('content'); ?>

    <div class="block block-themed block-rounded">
        <div class="block-header bg-gd-sea">
            <h3 class="block-title">
                Tabel <small>Daftar Pasien</small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <a href="<?php echo e(url('pendaftaran-pasien/create-step-one')); ?>" class="btn btn-alt-success"><i class="far fa-square-plus"></i> Tambah Pasien Lama</a>
                <a href="<?php echo e(url('pendaftaran-pasien/create-step-one-baru')); ?>" class="btn btn-alt-success"><i class="far fa-square-plus"></i> Tambah Pasien Baru</a>
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hospital\resources\views/admin/daftar_pasien/index.blade.php ENDPATH**/ ?>