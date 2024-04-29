@extends('layoutsfrontend.app')
@section('contentfrontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Panduan Pendaftaran</h2>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="row">

                @forelse ( $panduan as $pa)
                    <object data="/assets/{{ $pa->file }}" type="application/pdf" width="100%"
                    height="500px">
                @empty

                @endforelse

                </object>
                <div class="col-md-12 d-flex align-items-stretch">
                    <div class="card">


                    </div>
                </div>


            </div>
        </div>

        </div>
    </section><!-- End Events Section -->

</main><!-- End #main -->
@endsection
