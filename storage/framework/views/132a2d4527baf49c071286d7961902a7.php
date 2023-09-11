<?php $__env->startSection('content'); ?>
<div class="col-12">
    <div class="card radius-10">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="p-2">
                    <h5>Data Biaya Pendaftaran</h5>
                </div>
                <div class="p-2">
                    <?php if(count($data) > 0): ?>
                    <?php else: ?>
                        <a href="<?php echo e(route('biayapendaftaran.create')); ?>" class="btn btn-success">Tambah Data</a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Biaya Pendaftaran Pagi</th>
                        <th>Biaya Pendaftaran Malam</th>
                        <th>Biaya Pendaftaran Nama Rekening</th>
                        <th>Biaya Pendaftaran Nomor Rekening</th>
                        <th>Biaya Pendaftaran Nama Nasabah</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($dt->malam); ?></td>
                        <td><?php echo e($dt->pagi); ?></td>
                        <td><?php echo e($dt->nama_rekening); ?></td>
                        <td><?php echo e($dt->nomor_rekening); ?></td>
                        <td><?php echo e($dt->nama_nasabah); ?></td>
                        <td>
                            <form action="<?php echo e(route('biayapendaftaran.destroy', $dt->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Hapus Data</button>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/admin/biayapendaftaran/index.blade.php ENDPATH**/ ?>