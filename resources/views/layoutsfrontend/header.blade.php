@php
use App\Models\HasilCBT;
use App\Models\LinkDaftar;
$cbt = HasilCBT::all();
$link = LinkDaftar::where('tujuan_url','like',"%Sarjana%")->first();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PMB UM Jambi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('') }}frontend/img/favicon.png" rel="icon">
    <link href="{{ asset('') }}frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('') }}frontend/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('') }}frontend/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('') }}frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('') }}frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('') }}frontend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('') }}frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('') }}frontend/css/style.css" rel="stylesheet">

    @stack('styles')

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
            <a href="{{ url('/') }}" class="logo me-auto"><img src="{{ asset('') }}frontend/img/logo-um.png" alt=""></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="active" href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('home/alurpendaftaran') }}">Alur Pendaftaran</a></li>
                    <li><a href="{{ url('home/pascasarjana') }}">Pascasarjana</a></li>
                    <li><a href="{{ url('home/rpl') }}">RPL &nbsp;<span></span><small class="text-danger fst-italic"> Baru</small></a></li>
                    <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('home/beasiswa') }}">Beasiswa</a></li>
                            <li><a href="{{ url('home/akreditasi') }}">Akreditasi</a></li>
                            <li><a href="{{ url('home/biayapendaftaran') }}">Biaya Pendaftaran</a></li>
                            <li><a href="{{ url('home/biayaperkuliahan') }}">Biaya Perkuliahan</a></li>
                            <li><a href="{{ url('home/syaratpendaftaran') }}">Syarat Pendaftaran</a></li>
                            <li><a href="{{ url('home/brosur') }}">Download Brosur</a></li>
                            <li><a href="{{ url('home/panduanpendaftaran') }}">Panduan Penfaftaran</a></li>
                            <li class="dropdown"><a href="#">Hasil CBT</a>
								<ul>
                                    @foreach ( $cbt as $ct )
                                        <li><a href="{{ url('home/hasilcbt', $ct->id) }}">{{ $ct->judul }}</a></li>
                                    @endforeach
								</ul>
							</li>
                        </ul>
                    </li>
                    <li><a href="{{ url('home/fakultas') }}">Fakultas</a></li>
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
                    <li><a href="{{ url('home/kontak') }}">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="{{ $link->url }}" class="get-started-btn">Daftar</a>

        </div>
    </header><!-- End Header -->

    <!-- End Header -->
