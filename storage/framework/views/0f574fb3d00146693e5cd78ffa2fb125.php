
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
                <a href="<?php echo e(url('kamar-rawat/create')); ?>" class="btn btn-alt-success"><i class="far fa-square-plus"></i> Tambah Pasien Baru</a>
                <a href="<?php echo e(url('pendaftaran-pasien/cek')); ?>" class="btn btn-alt-success"><i class="far fa-square-plus"></i> Tambah</a>
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%">No.</th>
                            <th>Nama Ruangan</th>
                            <th>Fasilitas</th>
                            <th>Isi</th>
                            <th>Kosong</th>
                            <th>Jumlah Kamar</th>
                            <th>Kelas</th>
                            <th class="text-center" style="width: 20%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=1;
                        ?>
                        <?php $__currentLoopData = $daftar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center"><?php echo e($no++); ?></td>
                            <td class="fw-semibold"><?php echo e($data->nama_ruangan); ?></td>
                            <td><?php echo e($data->fasilitas); ?></td>
                            <td><?php echo e($data->isi); ?></td>
                            <td><?php echo e($data->kososng); ?></td>
                            <td><?php echo e($data->jumlah_kamar); ?></td>
                            <td><?php echo e($data->kelas); ?></td>
                            <td>
                                <form action="<?php echo e(url('kamar-rawat/delete/'.$data->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <a href="" class="btn btn-alt-info" data-bs-toggle="tooltip" title="View Data">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <a class="btn btn-alt-success" href="<?php echo e(url('kamar-rawat/edit/'.$data->id)); ?>" data-bs-toggle="tooltip" title="Edit Data">
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
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hospital\resources\views/admin/data_pasien/index.blade.php ENDPATH**/ ?>