@extends('layoutsfrontend.app')
@section('contentfrontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Brosur Penerimaah Mahasiswa Baru 2023</h2>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="row">
                @forelse ( $brosur as $br )
                <div class="col-md-12 d-flex align-items-stretch">
                    <div class="card">
                        <p>Click on the image to download it:<p>
                                <a href="{{ Storage::url('public/brosur/').$br->gambar }}"
                                    download="1_20230318_134332_0000">


                                    <div class="card-img">
                                        <img src="{{ Storage::url('public/brosur/').$br->gambar }}"
                                            alt="...">
                                    </div>
                                </a>
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
