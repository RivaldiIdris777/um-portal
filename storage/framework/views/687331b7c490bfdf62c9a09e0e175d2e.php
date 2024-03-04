<?php $__env->startSection('contentfrontend'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center" style="background: url('<?php echo e(Storage::url('public/slider/').$slider->gambar); ?>') top center; background-size: cover; max-width:100%;">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Berprestasi<br><span style="color:red;"> Bersama UM Jambi</span></h1>
        <h2>Terakreditasi Baik Sekali</h2>
        <a href="<?php echo e($link->url); ?>" class="btn-get-started">Daftar</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $akreditasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="<?php echo e(Storage::url('public/akreditasi/').$ak->gambar); ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3><?php echo e($ak->judul); ?></h3>
                    <p class="fst-justify">
                        <?php echo $ak->penjelasan; ?>

                    </p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <?php endif; ?>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row counters">

                <?php $__empty_1 = true; $__currentLoopData = $kapasitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="<?php echo e($kp->jml_mahasiswa); ?>" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Mahasiswa</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="<?php echo e($kp->jml_fakultas); ?>" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Fakultas</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="<?php echo e($kp->jml_prodi); ?>" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Program Studi</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="<?php echo e($kp->jml_dosen); ?>" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Dosen</p>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <?php endif; ?>
            </div>

        </div>
    </section><!-- End Counts Section -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row" data-aos="fade-up">
                <div class="section-title">
                    <p style="color:#800000">Kelebihan Universitas Muhammadiyah Jambi</p>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3">
                    <div class="member">
                        <img src="<?php echo e(Storage::url('public/jalur_pendaftaran/').$jadwalpendaftaran->gambar); ?>" class="img-fluid rounded-3" alt="...">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3">
                    <div class="member">
                        <img src="<?php echo e(Storage::url('public/jalur_pendaftaran/').$fasilitas[0]->gambar); ?>" class="img-fluid rounded-3" alt="...">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3">
                    <div class="member">
                        <img src="<?php echo e(Storage::url('public/jalur_pendaftaran/').$jalurpendaftaran->gambar); ?>" class="img-fluid rounded-3" alt="...">
                    </div>
                </div>

                
            </div>

        </div>
    </section><!-- End About Section -->


    <!-- ======= Trainers Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Profil</h2>
                <p>Lulusan</p>
            </div>
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-lg-4 d-flex align-items-stretch mb-3">
                    <div class="content">
                        <h3>Kenapa Memilih UM Jambi?</h3>
                        <p>
                            Berikut ini adalah beberapa aspek dari profil lulusan Universitas Muhammadiyah Jambi
                        </p>
                        <div class="text-center">
                            <a href="" class="more-btn"> <i class="bx bx-chevron-right"></i><i
                                    class="bx bx-chevron-right"></i><i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <?php $__empty_1 = true; $__currentLoopData = $lulusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3">
                    <div class="member">
                        <img src="<?php echo e(Storage::url('public/profil_lulusan/').$lu->gambar); ?>" class="img-fluid" alt="...">
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <?php endif; ?>

            </div>

        </div>
    </section><!-- End Trainers Section -->

</main><!-- End #main -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutsfrontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/user/home/index.blade.php ENDPATH**/ ?>