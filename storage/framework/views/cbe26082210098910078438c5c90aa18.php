<?php $__env->startSection('content'); ?>
<div class="col-12">
    <div class="card radius-10">
        <div class="card-body">
            <div>
                <h5>Tambah Data Hasil CBT</h5>
                <form action="<?php echo e(route('hasilcbt.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input name="judul" type="text" class="form-control">
                            <?php if($errors->has('judul')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('judul')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Upload File Panduang Pendaftaran</label>
                            <input type="file" name="file" class="form-control">
                            <?php if($errors->has('file')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('file')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <textarea name="penjelasan" id="konten" cols="30" rows="10" class="form-control"></textarea>
                            <?php if($errors->has('penjelasan')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('penjelasan')); ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/admin/hasilcbt/create.blade.php ENDPATH**/ ?>