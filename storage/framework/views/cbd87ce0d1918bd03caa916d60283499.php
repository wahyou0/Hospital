<?php $__env->startSection('content'); ?>

    <div class="block block-themed block-rounded">
        <div class="block-header bg-gd-sea">
            <h3 class="block-title">
                Tabel <small>Jadwal Dokter</small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <a href="<?php echo e(url('jadwal-dokter/create')); ?>" class="btn btn-alt-success"><i class="far fa-square-plus"></i> Tambah</a>
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%">No.</th>
                            <th>Nama Dokter</th>
                            <th>Umum/Spesialis</th>
                            <th style="width: 28%;">Jadwal</th>
                            <th class="text-center" style="width: 12%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=1;
                        ?>
                        <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center"><?php echo e($no++); ?></td>
                            <td class="fw-semibold"><?php echo e($data->nama_dokter); ?></td>
                            <td><?php echo e($data->spesialis); ?></td>
                            <td><?php echo e($data->jadwal); ?></td>
                            <td>
                                <form action="<?php echo e(url('jadwal-dokter/delete/'.$data->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    
                                    <a class="btn btn-alt-success" href="<?php echo e(url('jadwal-dokter/edit/'.$data->id)); ?>" data-bs-toggle="tooltip" title="Edit Data">
                                        <i class="fa fa-pen-to-square"></i>
                                    </a>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-alt-danger show-alert-delete-box" data-bs-toggle="tooltip" title="Hapus Data">
                                        <i class="fa fa-trash-can"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hospital\resources\views/admin/jadwal_dokter/index.blade.php ENDPATH**/ ?>