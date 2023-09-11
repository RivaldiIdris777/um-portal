<?php $__env->startSection('content'); ?>
<div class="col-12">
    <div class="card radius-10">
        <div class="card-body">
            <div>
                <h5>Tambah Data Kapasitas Kampus</h5>
                <form action="<?php echo e(route('kapasitas.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label">Jumlah Mahasiswa</label>
                            <input name="jml_mahasiswa" type="number" class="form-control">
                            <?php if($errors->has('jml_mahasiswa')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('jml_mahasiswa')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Fakultas</label>
                            <input name="jml_fakultas" type="number" class="form-control">
                            <?php if($errors->has('jml_fakultas')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('jml_fakultas')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Program Studi</label>
                            <input name="jml_prodi" type="number" class="form-control">
                            <?php if($errors->has('jml_prodi')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('jml_prodi')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Dosen</label>
                            <input name="jml_dosen" type="number" class="form-control">
                            <?php if($errors->has('jml_dosen')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('jml_dosen')); ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/admin/kapasitas/create.blade.php ENDPATH**/ ?>