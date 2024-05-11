@extends('layoutsfrontend.app')
@section('contentfrontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Biaya Pendaftaran</h2>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="events" class="events">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">
                </object>
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="card mt-3">
                        <div class="card-body bg-warning">
                            <table class="table table-bordered">
                                @forelse ( $biaya as $by )
                                <tbody>
                                    <tr>
                                        <td><p class="fw-bold">Biaya Reguler A</p></td>
                                        <td>Rp. {{ format_uang($by->pagi) }}</td>
                                    </tr>
                                    <tr>
                                        <td><p class="fw-bold">Biaya Reguler B</p></td>
                                        <td>Rp. {{ format_uang($by->malam) }}</td>
                                    </tr>
                                    <tr>
                                        <td><p class="fw-bold">Pembayaran Melalui</p></td>
                                        <td>Biaya Pendaftaran Langsung Melalui Sipenmaru di Link Berikut <br><a href="https://sipenmaru.umjambi.ac.id/">Masuk Disini</a></td>
                                    </tr>
                                    <tr>
                                        <td><p class="fw-bold">Atas Nama Rekening</p></td>
                                        <td>{{ $by->nama_nasabah }}</td>
                                    </tr>
                                </tbody>
                                @empty

                                @endforelse
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        </div>
    </section><!-- End Events Section -->

</main><!-- End #main -->
@endsection
