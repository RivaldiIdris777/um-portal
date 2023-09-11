<?php $__env->startSection('content'); ?>
<div class="col-12">
    <div class="card radius-10">
        <div class="card-body">
            <div>
                <h5>Tambah Data Info Biaya Pendaftaran</h5>
                <form action="<?php echo e(route('biayapendaftaran.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label">Biaya Pendaftaran Pagi</label>
                            <input name="pagi" type="number" class="form-control">
                            <?php if($errors->has('pagi')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('pagi')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Biaya Pendaftaran Malam</label>
                            <input name="malam" type="number" class="form-control">
                            <?php if($errors->has('malam')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('malam')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rekening Bank</label>
                            <input name="nama_rekening" type="text" class="form-control" value="BSI" readonly>
                            <?php if($errors->has('nama_rekening')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('nama_rekening')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor Rekening</label>
                            <input name="nomor_rekening" type="number" class="form-control">
                            <?php if($errors->has('nomor_rekening')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('nomor_rekening')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Nasabah</label>
                            <input name="nama_nasabah" type="text" class="form-control" >
                            <?php if($errors->has('nama_nasabah')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('nama_nasabah')); ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/admin/biayapendaftaran/create.blade.php ENDPATH**/ ?>