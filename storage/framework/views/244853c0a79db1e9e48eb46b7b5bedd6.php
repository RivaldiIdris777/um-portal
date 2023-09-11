<?php $__env->startSection('content'); ?>
<div class="col-12">
    <div class="card radius-10">
        <div class="card-body">
            <div>
                <h5>Tambah Data Brosur</h5>
                <form action="<?php echo e(route('slider.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label">Tujuan Slider untuk Sarjana / Pasca Sarjana</label>
                            <select name="tujuanslider" class="form-control">
                                <option value="Sarjana">Sarjana</option>
                                <option value="Pascasarjana">Pascasarjana</option>
                            </select>
                            <?php if($errors->has('tujuanslider')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('tujuanslider')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Upload Gambar Slider</label>
                            <img class="mb-2" id="outputtf" src="<?php echo e(old('gambar')); ?>" width="1000" height="900">
                            <input type="file" name="gambar" class="form-control" accept="image/*"
                                onchange="document.getElementById('outputtf').src = window.URL.createObjectURL(this.files[0])">
                            <?php if($errors->has('gambar')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('gambar')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Penjelasan</label>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/admin/slider/create.blade.php ENDPATH**/ ?>