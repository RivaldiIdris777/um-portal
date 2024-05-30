@extends('layoutsfrontend.app')
@section('contentfrontend')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center"
    style="background: url('{{ Storage::url('public/slider/').$slider->gambar }}') top center; background-size: cover; max-width:100%;">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <div class="mt-4">
            <h1>Telah Dibuka !!<br><span style="color:red;">Pendaftaran Mahasiswa Baru Tahun 2024</span></h1>
            <h2>Tata cara pendaftaran silahkan klik link dibawah</h2>
        </div>
        <div class="row mt-3">
            <div class="col-md-5 text-center">
                <a href="https://youtu.be/70CxG9-4Bjo" target="_blank">
                    <img src="{{ asset('') }}carapmb.png" width="450" height="450" alt="" class="img-fluid">
                </a>
                <a href="https://youtu.be/70CxG9-4Bjo" target="_blank" class="btn-get-started">Tata Cara Pendaftaran Mahasiswa Baru</a>
            </div>
            <div class="col-md-5 text-center">
                <a href="https://youtu.be/PvgmVRC5gBQ" target="_blank">
                    <img src="{{ asset('') }}bayarpmb.png" width="450" height="450" alt="" class="img-fluid">
                </a>
                <a href="https://youtu.be/PvgmVRC5gBQ" target="_blank" class="btn-get-started2">Tata Cara Pembayaran Perkuliahan</a>
            </div>
        </div>
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
                    <span data-purecounter-start="0" data-purecounter-end="{{ $kp->jml_mahasiswa }}"
                        data-purecounter-duration="1" class="purecounter"></span>
                    <p>Mahasiswa</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="{{ $kp->jml_fakultas }}"
                        data-purecounter-duration="1" class="purecounter"></span>
                    <p>Fakultas</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="{{ $kp->jml_prodi }}"
                        data-purecounter-duration="1" class="purecounter"></span>
                    <p>Program Studi</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="{{ $kp->jml_dosen }}"
                        data-purecounter-duration="1" class="purecounter"></span>
                    <p>Dosen</p>
                </div>

                @empty

                @endforelse
            </div>

        </div>
    </section><!-- End Counts Section -->


    <!-- ======= About Section ======= -->
    <section id="about-kelebihan" class="about">
        <div class="container">

            <div class="row" data-aos="fade-up">
                <div class="section-title">
                    <p style="color:#fff">Kelebihan Universitas Muhammadiyah Jambi</p>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3">
                    <div class="member">
                        <img src="{{ Storage::url('public/jalur_pendaftaran/').$jadwalpendaftaran->gambar }}"
                            class="img-fluid rounded-3" alt="...">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3">
                    <div class="member">
                        <img src="{{ Storage::url('public/jalur_pendaftaran/').$fasilitas[0]->gambar }}"
                            class="img-fluid rounded-3" alt="...">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3">
                    <div class="member">
                        <img src="{{ Storage::url('public/jalur_pendaftaran/').$jalurpendaftaran->gambar }}"
                            class="img-fluid rounded-3" alt="...">
                    </div>
                </div>

                {{-- <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ Storage::url('public/jalur_pendaftaran/').$jadwalpendaftaran->gambar }}"
                class="img-fluid" alt="">
                <img src="{{ Storage::url('public/jalur_pendaftaran/').$fasilitas[0]->gambar }}" class="img-fluid"
                    alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3>Jalur Pendaftaran </h3>
                <p class="fst-justify">
                    <img src="{{ Storage::url('public/jalur_pendaftaran/').$jalurpendaftaran->gambar }}"
                        class="img-fluid" alt="">
                </p>
            </div> --}}
        </div>

        </div>
    </section><!-- End About Section -->

    <section id="tatacara-pendaftaran" class="about mt-5">
        <div class="container">

            <div class="row" data-aos="fade-up">
                <div class="section-title">
                    <p style="color:#2f3542">Tata Cara Pendaftaran Pendaftaran Mahasiswa Baru</p>
                </div>

                <div class="col-lg-12 col-md-12">
                    <iframe style="width: 100%;" height="700" src="https://www.youtube.com/embed/70CxG9-4Bjo?si=PoP634jfDr0hMKU0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

            </div>

        </div>
    </section><!-- End About Section -->

    <section id="tatacara-pembayaran" class="about mt-5">
        <div class="container">

            <div class="row" data-aos="fade-up">
                <div class="section-title">
                    <p style="color:#2f3542">Tata Cara Pembayaran Perkuliahan</p>
                </div>

                <div class="col-lg-12 col-md-12">
                    <iframe style="width: 100%;" height="700" src="https://www.youtube.com/embed/PvgmVRC5gBQ?si=NTT0RAcsmKatWu0t" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

                @forelse ( $lulusan as $lu )
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3">
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
