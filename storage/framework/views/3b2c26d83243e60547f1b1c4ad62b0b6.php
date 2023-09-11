<?php $__env->startSection('contentfrontend'); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>DAFTAR HASIL SELEKSI PENERIMAAN MAHASISWA BARU<br>
                TAHUN AJARAN 2023-2024
            </h2>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="row mt-3">
                <?php $__empty_1 = true; $__currentLoopData = $hasilcbt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3"><?php echo e($dt->judul); ?></h4>
                        <object data="/assets/hasilcbt/<?php echo e($dt->file); ?>" type="application/pdf"
                            width="100%" height="500px">
                        </object>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <?php endif; ?>
            </div>
        </div>

        </div>
    </section><!-- End Events Section -->

</main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutsfrontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/user/hasilcbt/index.blade.php ENDPATH**/ ?>