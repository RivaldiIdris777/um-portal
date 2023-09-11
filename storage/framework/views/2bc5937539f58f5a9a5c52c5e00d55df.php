<?php $__env->startSection('content'); ?>
<div class="col-12">
    <div class="card radius-10">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="p-2">
                    <h5>Data Syarat Pendaftaran</h5>
                </div>
                <div class="p-2">
                    <a href="<?php echo e(route('syaratpendaftaran.create')); ?>" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card radius-10">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="p-2">
                        <h4>Data <?php echo e($dt->judul); ?></h4>
                    </div>
                    <div class="p-2">
                        <form action="<?php echo e(route('syaratpendaftaran.destroy', $dt->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Hapus Data</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div>
                </div>
                <img src="<?php echo e(Storage::url('public/syarat_pendaftaran/').$dt->gambar); ?>" alt="" width="1000" height="900">
                <table class="table table-striped no-margin mt-3">
                    <tbody>
                        <tr>
                            <td>Judul</td>
                            <td><?php echo e($dt->judul); ?></td>
                        </tr>
                        <tr>
                            <td>Penjelasan</td>
                            <td><?php echo $dt->penjelasan; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/admin/syaratpendaftaran/index.blade.php ENDPATH**/ ?>