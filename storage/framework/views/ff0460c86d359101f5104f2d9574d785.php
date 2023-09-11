<?php $__env->startSection('contentfrontend'); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Brosur Penerimaah Mahasiswa Baru 2023</h2>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $brosur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $br): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-12 d-flex align-items-stretch">
                    <div class="card">
                        <p>Click on the image to download it:<p>
                                <a href="<?php echo e(Storage::url('public/brosur/').$br->gambar); ?>"
                                    download="1_20230318_134332_0000">


                                    <div class="card-img">
                                        <img src="<?php echo e(Storage::url('public/brosur/').$br->gambar); ?>"
                                            alt="...">
                                    </div>
                                </a>
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

<?php echo $__env->make('layoutsfrontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/user/brosur/index.blade.php ENDPATH**/ ?>