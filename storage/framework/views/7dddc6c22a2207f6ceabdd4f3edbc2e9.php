<?php $__env->startSection('contentfrontend'); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Informasi Biaya Kuliah</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-12 d-flex align-items-stretch">
            <?php $__empty_1 = true; $__currentLoopData = $biaya; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $by): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="card">
              <div class="card-img">
                <img src="<?php echo e(Storage::url('public/biayaperkuliahan/').$by->gambar); ?>" alt="...">
              </div>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
          </div>
          </div>
        </div>

      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutsfrontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/user/biayaperkuliahan/index.blade.php ENDPATH**/ ?>