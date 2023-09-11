<?php $__env->startSection('content'); ?>
<div class="col-12">
    <div class="card radius-10">
        <div class="card-body">
            <div>
                <h5>Tambah Data Kontak</h5>
                <form action="<?php echo e(route('kontak.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label">Upload Gambar</label>
                            <img class="mb-2" src="<?php echo e(old('gambar')); ?>" width="500" height="500">
                            <input type="file" name="gambar" class="form-control" accept="image/*"
                                onchange="document.getElementById('outputtf').src = window.URL.createObjectURL(this.files[0])">
                            <?php if($errors->has('gambar')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('gambar')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" cols="10" rows="2"></textarea>
                            <?php if($errors->has('alamat')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('alamat')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input name="email" type="email" class="form-control">
                            <?php if($errors->has('email')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('email')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No. Whatsapp</label>
                            <input name="whatsapp" type="number" class="form-control">
                            <?php if($errors->has('whatsapp')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('whatsapp')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Link Google Map</label>
                            <textarea name="googlemaplink" class="form-control" cols="10" rows="4"></textarea>
                            <?php if($errors->has('googlemaplink')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('googlemaplink')); ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/admin/kontak/create.blade.php ENDPATH**/ ?>