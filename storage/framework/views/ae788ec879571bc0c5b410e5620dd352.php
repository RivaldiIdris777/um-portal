<?php $__env->startSection('content'); ?>
<div class="col-12">
    <div class="card radius-10">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="p-2">
                    <h5>Data Kontak</h5>
                </div>
                <div class="p-2">
                    <a href="<?php echo e(route('kontak.create')); ?>" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card radius-10">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="p-2">
                        <h4>Data Kontak (Alamat, Email, Whatsapp)</h4>
                    </div>
                    <div class="p-2">
                        <form action="<?php echo e(route('kontak.destroy', $dt->id)); ?>" method="POST">
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
                <iframe style="border:0; width: 100%; height: 350px;" src="<?php echo e($dt->googlemaplink); ?>" frameborder="0" allowfullscreen></iframe>
                <table class="table table-striped no-margin mt-3">
                    <tbody>
                        <tr>
                            <td>Alamat</td>
                            <td><?php echo e($dt->alamat); ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo e($dt->email); ?></td>
                        </tr>
                        <tr>
                            <td>Whatsapp</td>
                            <td><?php echo e($dt->whatsapp); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/admin/kontak/index.blade.php ENDPATH**/ ?>