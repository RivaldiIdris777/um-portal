@extends('layoutsfrontend.app')
@section('contentfrontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Informasi Biaya Kuliah</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-12 d-flex align-items-stretch">
            @forelse ( $biaya as $by )
            <div class="card">
              <div class="card-img">
                <img src="{{ Storage::url('public/biayaperkuliahan/').$by->gambar }}" alt="...">
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
