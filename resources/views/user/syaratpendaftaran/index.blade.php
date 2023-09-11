@extends('layoutsfrontend.app')
@section('contentfrontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Syarat Pendaftaran</h2>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="row">



                </object>
                <div class="col-md-12 d-flex align-items-stretch">
                    @forelse ( $syarat as $sy )
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ Storage::url('public/syarat_pendaftaran/').$sy->gambar }}" alt="...">
                        </div>
                    </div>
                    @empty

                    @endforelse
                </div>


            </div>
        </div>

        </div>
    </section><!-- End Events Section -->

</main><!-- End #main -->
@endsection
