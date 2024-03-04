<?php
use App\Models\HasilCBT;
use App\Models\LinkDaftar;
$cbt = HasilCBT::all();
$link = LinkDaftar::where('tujuan_url','like',"%Sarjana%")->first();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PMB UM Jambi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo e(asset('')); ?>frontend/img/favicon.png" rel="icon">
    <link href="<?php echo e(asset('')); ?>frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(asset('')); ?>frontend/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('')); ?>frontend/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo e(asset('')); ?>frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('')); ?>frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo e(asset('')); ?>frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('')); ?>frontend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo e(asset('')); ?>frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo e(asset('')); ?>frontend/css/style.css" rel="stylesheet">

    <?php echo $__env->yieldPushContent('styles'); ?>

    <!-- =======================================================
  * Template Name: Mentor
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <!-- <h1 class="logo me-auto"><a href="index.html">UM Jambi</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="#" class="logo me-auto"><img src="<?php echo e(asset('')); ?>frontend/img/logo-um.png" alt=""></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="active" href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li><a href="<?php echo e(url('home/alurpendaftaran')); ?>">Alur Pendaftaran</a></li>
                    <li><a href="<?php echo e(url('home/pascasarjana')); ?>">Pascasarjana</a></li>
                    <li><a href="<?php echo e(url('home/rpl')); ?>">RPL &nbsp;<span></span><small class="text-danger fst-italic"> Baru</small></a></li>
                    <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?php echo e(url('home/biayapendaftaran')); ?>">Biaya Pendaftaran</a></li>
                            <li><a href="<?php echo e(url('home/biayaperkuliahan')); ?>">Biaya Perkuliahan</a></li>
                            <li><a href="<?php echo e(url('home/syaratpendaftaran')); ?>">Syarat Pendaftaran</a></li>
                            <li><a href="<?php echo e(url('home/brosur')); ?>">Download Brosur</a></li>
                            <li><a href="<?php echo e(url('home/panduanpendaftaran')); ?>">Panduan Penfaftaran</a></li>
                            <li class="dropdown"><a href="#">Hasil CBT</a>
								<ul>
                                    <?php $__currentLoopData = $cbt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e(url('home/hasilcbt', $ct->id)); ?>"><?php echo e($ct->judul); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</li>
                        </ul>
                    </li>
                    <li><a href="<?php echo e(url('home/fakultas')); ?>">Fakultas</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>Program Studi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Fakultas Ekonomi dan Bisnis</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="">Ekonomi Pembangunan</a></li>
                  <li><a href="">Manajemen</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Fakultas Sains dan Teknologi</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Sistem Informasi</a></li>
                  <li><a href="#">Informatika</a></li>
                  <li><a href="#">Kehutanan</a></li>
                </ul>
              </li>

            </ul>
          </li> -->
                    <li><a href="<?php echo e(url('home/kontak')); ?>">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="<?php echo e($link->url); ?>" class="get-started-btn">Daftar</a>

        </div>
    </header><!-- End Header -->

    <!-- End Header -->
<?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/layoutsfrontend/header.blade.php ENDPATH**/ ?>