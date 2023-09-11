@extends('layoutsfrontend.app')
@section('contentfrontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>DAFTAR HASIL SELEKSI PENERIMAAN MAHASISWA BARU<br>
                TAHUN AJARAN 2023-2024
            </h2>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="row mt-3">
                @forelse ( $hasilcbt as $dt)
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">{{ $dt->judul }}</h4>
                        <object data="/assets/hasilcbt/{{$dt->file}}" type="application/pdf"
                            width="100%" height="500px">
                        </object>
                    </div>
                </div>
                @empty

                @endforelse
            </div>
        </div>

        </div>
    </section><!-- End Events Section -->

</main><!-- End #main -->
@endsection
