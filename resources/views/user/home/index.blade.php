@extends('layoutsfrontend.app')
@section('contentfrontend')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Berprestasi<br><span style="color:red;"> Bersama UM Jambi</span></h1>
        <h2>Terakreditasi Baik Sekali</h2>
        <a href="{{ $link->url }}" class="btn-get-started">Daftar</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                @forelse ($akreditasi as $ak )
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{ Storage::url('public/akreditasi/').$ak->gambar }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>{{ $ak->judul }}</h3>
                    <p class="fst-justify">
                        {!! $ak->penjelasan !!}
                    </p>
                </div>
                @empty

                @endforelse
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row counters">

                @forelse ( $kapasitas as $kp )
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $kp->jml_mahasiswa }}" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Mahasiswa</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $kp->jml_fakultas }}" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Fakultas</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $kp->jml_prodi }}" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Program Studi</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $kp->jml_dosen }}" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Dosen</p>
                    </div>

                @empty

                @endforelse
            </div>

        </div>
    </section><!-- End Counts Section -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ Storage::url('public/jalur_pendaftaran/').$jadwalpendaftaran->gambar }}" class="img-fluid" alt="">
                    <img src="{{ Storage::url('public/jalur_pendaftaran/').$fasilitas[0]->gambar }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>Jalur Pendaftaran </h3>
                    <p class="fst-justify">
                        <img src="{{ Storage::url('public/jalur_pendaftaran/').$jalurpendaftaran->gambar }}" class="img-fluid" alt="">
                    </p>
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
                <div class="col-lg-4 d-flex align-items-stretch">
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

                @forelse ( $lulusan as $lu )
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="{{ Storage::url('public/profil_lulusan/').$lu->gambar }}" class="img-fluid" alt="...">
                    </div>
                </div>
                @empty

                @endforelse

            </div>

        </div>
    </section><!-- End Trainers Section -->

</main><!-- End #main -->

@endsection
