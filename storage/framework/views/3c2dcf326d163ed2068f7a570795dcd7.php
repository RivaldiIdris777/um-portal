<?php $__env->startSection('content'); ?>
<div class="col-12">
    <div class="card radius-10">
        <div class="card-body">
            <div>
                <h5>Tambah Data Alur Pendaftaran</h5>
                <form action="<?php echo e(route('prodi.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label">Sarjana</label>
                            <select name="id_fakultas" class="form-control">
                                <option value="">-- Pilih Fakultas --</option>
                                <?php $__currentLoopData = $fakultas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($fk->id); ?>"><?php echo e($fk->nama_fakultas); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('id_fakultas')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('id_fakultas')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Prodi</label>
                            <input type="text" name="nama_prodi" class="form-control">
                            <?php if($errors->has('nama_prodi')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('nama_prodi')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gelar (S.Kom / S.Hub)</label>
                            <input name="gelar" type="text" class="form-control">
                            <?php if($errors->has('gelar')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('gelar')); ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/admin/prodi/create.blade.php ENDPATH**/ ?>