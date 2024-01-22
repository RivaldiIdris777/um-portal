<?php $__env->startSection('content'); ?>
<div class="col-12">
    <div class="card radius-10">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="p-2">
                    <h5>Data Biaya Pendaftaran RPL</h5>
                </div>
                <div class="p-2">
                    <a href="<?php echo e(route('rplbiayapendaftaran.create')); ?>" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Program</th>
                        <th>Biaya Pendaftaran</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 0;
                    ?>
                    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e(++$no); ?></td>
                        <td><?php echo e($dt->program); ?></td>
                        <td>Rp <?php echo e(format_uang($dt->biayapendaftaran)); ?></td>
                        <td>
                            <form action="<?php echo e(route('rplbiayapendaftaran.destroy', $dt->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Hapus Data</button>
                                <a href="<?php echo e(route('rplbiayapendaftaran.edit', $dt->id)); ?>" class="btn btn-warning">Edit Data</a>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/admin/rplbiayapendaftaran/index.blade.php ENDPATH**/ ?>