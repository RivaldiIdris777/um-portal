@push('styles')
<style>
    #heropascasarjana {
        width: 100%;
        height: 45em;
        background: url("{{ asset('') }}rpl-slider2.png") top center;
        background-size: 100vw 100vh;
        background-attachment: fixed;
        position: relative;
        margin-top: 0;
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

    #rplbrosur {
        width: 80%;
        height: 90%;
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
@endpush
@extends('layoutsfrontend.app')
@section('contentfrontend')
<main id="main">
    <section id="heropascasarjana" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Rekognisi Pembelajaran Lampau (RPL)<br><span style="color:red;"> Fakultas Ekonomi dan Bisnis</span></h1>
            <p class="fw-bold text-white">Pendaftaran dibuka sampai 30 Mei 2024</p>
            <a href="https://drive.google.com/file/d/1zjoCIXEK_Z9kJ9a6dV7rdEoDlvKgJ0QN/view" class="btn-get-started" style="background:#0984e3;">Download Formulir Pendaftaran</a>
            <a href="https://sipenmaru.umjambi.ac.id/" class="btn-get-started" style="background: #f1c40f;">Daftar di Sipenmaru Sekarang Juga</a>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2 class="text-center">Pengumuman Terbaru</h2>

        </div>
    </div><!-- End Breadcrumbs -->

    <section id="events" class="events">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row mt-5">
                <div class="card">
                    <div class="card-body text-center">
                        <br>
                        <img src="{{ asset('') }}rpl_data/brosur2024.png" class="img-fluid" alt="" id="rplbrosur">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section><!-- End Events Section -->

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Bukti Resmi Kemendikbud </h2>

        </div>
    </div><!-- End Breadcrumbs -->

    <section id="events" class="events">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <br><br><br>
                        <div class="row justify-content-center">
                            @foreach ($dokumen as $dt)
                                <div class="col-md-6">
                                    <a href="{{ asset('') }}pdf/UU-Nomor-12-Tahun-2012.pdf">
                                        <div class="card-body text-center">
                                            <iframe src="/assets/rpldokumen/{{ $dt->file }}" type="application/pdf" style="height:50vh"></iframe>
                                            <br><br>
                                            <h4 style="color:#800000">{{ $dt->judul }}</h4>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section><!-- End Events Section -->

    <!-- ======= Breadcrumbs ======= -->
    {{-- <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Tim RPL UM JAMBI</h2>
        </div>
    </div><!-- End Breadcrumbs -->
    <br><br><br>
    <section id="tim_rpl" class="events">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card-body text-center">
                        <img class="text-center" src="{{ asset('') }}lawicon.png" alt="" width="200" height="180">
                        <br><br>
                        <h4>Dr. Hetty R, S.Kom.M.Kom</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body text-center">
                        <img class="text-center" src="{{ asset('') }}lawicon.png" alt="" width="200" height="180">
                        <br><br>
                        <h4>Dr. Arniwita, S.Pd, MM</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body text-center">
                        <img class="text-center" src="{{ asset('') }}lawicon.png" alt="" width="200" height="180">
                        <br><br>
                        <h4>Dr. Ermaini, SE, MM</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body text-center">
                        <img class="text-center" src="{{ asset('') }}lawicon.png" alt="" width="200" height="180">
                        <br><br>
                        <h4>Oka Ediansa, S.Kom, M.Si</h4>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Fakultas yang ditawarkan RPL</h2>
        </div>
    </div><!-- End Breadcrumbs -->
    <br><br><br>
    <section id="tim_rpl" class="events">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-body text-center">
                        <img class="text-center" src="{{ asset('') }}chart.png" alt="" width="200" height="180">
                        <br><br>
                        <h3>Fakultas Ekonomi dan Bisnis</h3>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body" style="height: 19.4rem;">
                        <h4>Prodi Ekonomi Pembangunan</h4>
                        <h6>Jenjang Karir Ekonomi Pembangunan</h6>
                        <ul>
                            <li>Analis Perencanaan Pembangunan </li>
                            <li>Keuangan, Perbankan, & Kebijakan Moneter </li>
                            <li>Enterpreneur</li>
                            <li>Peneliti</li>
                            <li>Tenaga Pendidik</li>
                        </ul>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-body text-center">
                        <img class="text-center" src="{{ asset('') }}chart.png" alt="" width="200" height="180">
                        <br><br>
                        <h3>Fakultas Ekonomi dan Bisnis</h3>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body" style="height: 19.4rem;">
                        <h4>Prodi Manajemen</h4>
                        <h6>Jenjang Karir Ekonomi Pembangunan</h6>
                        <ul>
                            <li>Analis Perencanaan Pembangunan </li>
                            <li>Keuangan, Perbankan, & Kebijakan Moneter </li>
                            <li>Enterpreneur</li>
                            <li>Peneliti</li>
                            <li>Tenaga Pendidik</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Tata Cara Pendaftaran RPL </h2>
        </div>
    </div><!-- End Breadcrumbs -->
    <section id="tim_rpl" class="events">
        <div class="container-fluid text-center">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ( $slider as $data)
                    <div class="carousel-item active">
                        <img src="{{ Storage::url('public/rplgambar/').$data->gambar }}" class="d-block w-100" alt="..." style="object-fit:fill">
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Biaya Pendaftaran & Biaya Pendidikan</h2>
        </div>
    </div><!-- End Breadcrumbs -->
    <section id="biayapendaftaranperkuliahan" class="events">
        <div class="container">
            <div class="biaya_pendaftaran">
                <h2 style="font-weight: 600">Biaya Pendaftaran</h2>
                <br>
                <table class="table table-bordered text-center" style="font-size: 30px; table-layout: fixed;">
                    <thead style="background-color:#800000;">
                        <tr>
                            <th class="text-white" style="background-color:#800000;">Program</th>
                            <th class="text-white" style="background-color:#800000;">Besaran Biaya Pendaftaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($biayapendaftaran as $data)
                        <tr>
                            <td>{{ $data->program }} - Sarjana</td>
                            <td>Rp {{ format_uang($data->biayapendaftaran) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br><br>
            <div class="biaya_perkuliahan">
                    <h2 style="font-weight: 600">Biaya Perkuliahan</h2>
                    <table class="table table-bordered text-center" style="font-size: 30px; table-layout: fixed;">
                        <thead>
                            <tr>
                                <th class="text-white" style="background-color:#800000;">Program</th>
                                <th class="text-white" style="background-color:#800000;">Besaran Biaya Pendidikan</th>
                                <th class="text-white" style="background-color:#800000;">Biaya Rekognisi / SKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($biayaperkuliahan as $data)
                            <tr>
                                <td>{{ $data->program }}</td>
                                <td>Rp {{ format_uang($data->biayapendidikan) }}</td>
                                <td>Rp {{ format_uang($data->biayarekognisi) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </section>

    <!-- ======= Breadcrumbs ======= -->
    {{-- <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Timeline Pendaftaran</h2>
        </div>
    </div><!-- End Breadcrumbs -->
    <section id="timelinependaftaran" class="events">
        <div class="container">
            <div class="biaya_pendaftaran">
                <h2 style="font-weight: 600">Biaya Pendaftaran</h2>
                <br>
                <table class="table table-bordered" style="font-size: 25px; table-layout: fixed;">
                    <thead>
                        <tr>
                          <th scope="col">KEGIATAN</th>
                          <th scope="col">WAKTU</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Konsultasi dan Pendaftaran</td>
                          <td>3 April – 31 Mei 17 Juni 2023</td>
                        </tr>
                        <tr>
                          <td>Menyiapkan dokumen dan portofolio pembuktian pencapaian pembelajaran yang relevan</td>
                          <td>17 Juni 24 Juni 2023</td>
                        </tr>
                      </tbody>
                </table>
            </div>
        </div>
    </section> --}}



</main><!-- End #main -->
@endsection
