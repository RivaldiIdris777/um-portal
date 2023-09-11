<?php $__env->startSection('content'); ?>
<div class="col-12">
    <div class="card radius-10">
        <div class="card-body">
            <div>
                <h5>Tambah Data Link Pendaftaran</h5>
                <form action="<?php echo e(route('linkdaftar.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label">Tujuan URL</label>
                            <select name="tujuan_url" class="form-control">
                                <option value="Sarjana">Sarjana</option>
                                <option value="Pascasarjana">Pascasarjana</option>
                            </select>
                            <?php if($errors->has('tujuan_url')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('tujuan_url')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Link Pendaftaran</label>
                            <input name="nama_url" type="text" class="form-control" >
                            <?php if($errors->has('nama_url')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('nama_url')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Url</label>
                            <input name="url" type="text" class="form-control" >
                            <?php if($errors->has('url')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('url')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'penjelasan' );
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/admin/linkdaftar/create.blade.php ENDPATH**/ ?>