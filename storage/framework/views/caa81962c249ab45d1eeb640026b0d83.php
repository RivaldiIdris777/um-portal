<?php $__env->startSection('content'); ?>
<div class="col-12">
    <div class="card radius-10">
        <div class="card-body">
            <div>
                <h5>Tambah Data Biaya Perkuliahan RPL</h5>
                <form action="<?php echo e(route('rplbiayaperkuliahan.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label">Program</label>
                            <input name="program" type="text" class="form-control" >
                            <?php if($errors->has('program')): ?>
                            <div class="text-danger">
                                <small><?php echo e($errors->first('program')); ?></small>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Biaya Perkuliahan</label>
                            <input name="biayapendidikan" type="number" class="form-control" >
                            <?php if($errors->has('biayapendidikan')): ?>
                            <div class="text-danger">
                                <small><?php echo e($errors->first('biayapendidikan')); ?></small>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Biaya Rekognisi</label>
                            <input name="biayarekognisi" type="number" class="form-control" >
                            <?php if($errors->has('biayarekognisi')): ?>
                            <div class="text-danger">
                                <small><?php echo e($errors->first('biayarekognisi')); ?></small>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success">Simpan</button>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/admin/rplbiayaperkuliahan/create.blade.php ENDPATH**/ ?>