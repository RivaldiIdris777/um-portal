@extends('layoutsfrontend.app')
@section('contentfrontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Hubungi Kami</h2>
            <p>
                Biro Humas, PMB dan Protokoler Gedung Universitas Muhammadiyah Jambi Jl. Kapt. Pattimura, Simpang IV
                Sipin Kota Jambi
            </p>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        @forelse ( $kontak as $kt )
        <div data-aos="fade-up">
            <iframe style="border:0; width: 100%; height: 350px;"
                src="{{ $kt->googlemaplink }}"
                frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container" data-aos="fade-up">

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Alamat:</h4>
                            <p>{{ $kt->alamat }}</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>{{ $kt->email }}</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Whatsapp:</h4>
                            <p>{{ $kt->whatsapp }}</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <div class="card-img">
                        {{-- <img src="{{ Storage::url('public/kontak/').$kt->gambar }}" alt="..."> --}}
                    </div>

                </div>

            </div>

        </div>
        @empty

        @endforelse
    </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
