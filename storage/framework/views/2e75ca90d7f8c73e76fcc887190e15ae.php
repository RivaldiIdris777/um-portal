<?php $__env->startSection('contentfrontend'); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Biaya Pendaftaran</h2>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="events" class="events">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">
                </object>
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="card mt-3">
                        <div class="card-body bg-warning">
                            <table class="table table-bordered">
                                <?php $__empty_1 = true; $__currentLoopData = $biaya; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $by): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tbody>
                                    <tr>
                                        <td><p class="fw-bold">Biaya Reguler A</p></td>
                                        <td>Rp. <?php echo e(format_uang($by->pagi)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><p class="fw-bold">Biaya Reguler B</p></td>
                                        <td>Rp. <?php echo e(format_uang($by->malam)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><p class="fw-bold">Transfer Melalui</p></td>
                                        <td><?php echo e($by->nama_rekening); ?></td>
                                    </tr>
                                    <tr>
                                        <td><p class="fw-bold">Nomor Rekening</p></td>
                                        <td><?php echo e($by->nomor_rekening); ?></td>
                                    </tr>
                                    <tr>
                                        <td><p class="fw-bold">Atas Nama Rekening</p></td>
                                        <td><?php echo e($by->nama_nasabah); ?></td>
                                    </tr>
                                </tbody>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                <?php endif; ?>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        </div>
    </section><!-- End Events Section -->

</main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutsfrontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/user/biayapendaftaran/index.blade.php ENDPATH**/ ?>