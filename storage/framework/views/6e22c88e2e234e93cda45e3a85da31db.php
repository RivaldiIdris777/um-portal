<?php $__env->startPush('styles'); ?>
<style>
    #heropascasarjana {
        width: 100%;
        height: 80vh;
        background: url("<?php echo e(asset('')); ?>frontend/img/sano-bg.png") top center;
        background-size: cover;
        position: relative;
    }

    #heropascasarjana:before {
        content: "";
        background: rgba(0, 0, 0, 0.4);
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
    }

    #heropascasarjana .container {
        padding-top: 72px;
    }


    @media (max-width: 992px) {
        #heropascasarjana .container {
            padding-top: 62px;
        }
    }

    #heropascasarjana h1 {
        margin: 0;
        font-size: 48px;
        font-weight: 700;
        line-height: 56px;
        color: #fff;
        font-family: "Poppins", sans-serif;
    }

    #heropascasarjana h2 {
        color: #eee;
        margin: 10px 0 0 0;
        font-size: 24px;
    }

    #heropascasarjana .btn-get-started {
        font-family: "Raleway", sans-serif;
        font-weight: 500;
        font-size: 15px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 10px 35px;
        border-radius: 50px;
        transition: 0.5s;
        margin-top: 30px;
        border: 2px solid #fff;
        color: #fff;
    }

    #heropascasarjana .btn-get-started:hover {
        background: #5fcf80;
        border: 2px solid #5fcf80;
    }

    @media (min-width: 1024px) {
        #heropascasarjana {
            background-attachment: fixed;
        }
    }

    @media (max-width: 768px) {
        #heropascasarjana {
            height: 100vh;
        }

        #heropascasarjana h1 {
            font-size: 28px;
            line-height: 36px;
        }

        #heropascasarjana h2 {
            font-size: 18px;
            line-height: 24px;
        }
    }

</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('contentfrontend'); ?>
<!-- ======= Hero Section ======= -->
<section id="heropascasarjana" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>PASCASARJANA<br><span style="color:red;"> Fakultas Ekonomi dan Bisnis</span></h1>
        <h2>Program Studi Ekonomi Pembangunan</h2>
        <a href="<?php echo e($link->url); ?>" class="btn-get-started">Daftar</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $pasca; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ps): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-12 d-flex align-items-stretch mt-3">
                    <div class="card">
                        <img src="<?php echo e(Storage::url('public/pascasarjana/').$ps->gambar); ?>" alt="...">
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <?php endif; ?>
            </div>
        </div>
    </section><!-- End About Section -->


</main><!-- End #main -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutsfrontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/user/pascasarjana/index.blade.php ENDPATH**/ ?>