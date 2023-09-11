<?php $__env->startSection('contentfrontend'); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Fakultas UM Jambi</h2>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="row">



                </object>
                <div class="col-md-12 d-flex justify-content-center mt-3">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="1">
                                            <img src="<?php echo e(asset('')); ?>img/fakultas123.png" alt="">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo e($ekonomi[0]->fakultas()->first()->nama_fakultas); ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php $__empty_1 = true; $__currentLoopData = $ekonomi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ek): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <ul>
                                                <li><?php echo e($ek->nama_prodi); ?></li>
                                            </ul>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e($teknologi[0]->fakultas()->first()->nama_fakultas); ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php $__empty_1 = true; $__currentLoopData = $teknologi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <ul>
                                                <li><?php echo e($tk->nama_prodi); ?></li>
                                            </ul>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section><!-- End Events Section -->

</main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutsfrontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/user/fakultas/index.blade.php ENDPATH**/ ?>