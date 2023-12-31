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
                                        <td><p class="fw-bold">Biaya Pendaftaran Pagi</p></td>
                                        <td>Rp. {{ format_uang($by->pagi) }}</td>
                                    </tr>
                                    <tr>
                                        <td><p class="fw-bold">Biaya Pendaftaran Malam</p></td>
                                        <td>Rp. {{ format_uang($by->malam) }}</td>
                                    </tr>
                                    <tr>
                                        <td><p class="fw-bold">Transfer Melalui</p></td>
                                        <td>{{ $by->nama_rekening }}</td>
                                    </tr>
                                    <tr>
                                        <td><p class="fw-bold">Nomor Rekening</p></td>
                                        <td>{{ $by->nomor_rekening }}</td>
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
