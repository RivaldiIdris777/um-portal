@push('styles')
<style>

</style>
@endpush
@extends('layoutsfrontend.app')
@section('contentfrontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>AKREDITASI PRODI UM JAMBI</h2>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="events" class="events">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row d-flex justify-content-center">
                </object>
                <div class="col-md-3 text-center">
                    <div class="card mt-5">
                        <div class="card-body ">
                            <embed src="{{ asset('') }}/akreditasi-umjambi.pdf"  alt="">
                            <div class="d-grid gap-2 mt-3">
                                <a href="{{ asset('') }}/akreditasi-umjambi.pdf" class="btn btn-success">UM JAMBI<br>Download File Akreditasi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card mt-5">
                        <div class="card-body ">
                            <embed src="{{ asset('') }}/akreditasi-ekonomi.pdf"  alt="">
                            <div class="d-grid gap-2 mt-3">
                                <a href="{{ asset('') }}/akreditasi-ekonomi.pdf" class="btn btn-success">Ekonomi Pembangunan<br>Download File Akreditasi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card mt-5">
                        <div class="card-body ">
                            <embed src="{{ asset('') }}/akreditasi-umjambi-manajemen.pdf"  alt="">
                            <div class="d-grid gap-2 mt-3">
                                <a href="{{ asset('') }}/akreditasi-umjambi-manajemen.pdf" class="btn btn-success">Manajemen<br>Download File Akreditasi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card mt-5">
                        <div class="card-body ">
                            <embed src="{{ asset('') }}/akreditasi-umjambi-sisteminformasi.pdf"  alt="">
                            <div class="d-grid gap-2 mt-3">
                                <a href="{{ asset('') }}/akreditasi-umjambi-sisteminformasi.pdf" class="btn btn-success">Sistem Informasi<br>Download File Akreditasi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card mt-5">
                        <div class="card-body ">
                            <embed src="{{ asset('') }}/akreditasi-umjambi-informatika.pdf"  alt="">
                            <div class="d-grid gap-2 mt-3">
                                <a href="{{ asset('') }}/akreditasi-umjambi-informatika.pdf" class="btn btn-success">Informatika<br>Download File Akreditasi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card mt-5">
                        <div class="card-body ">
                            <embed src="{{ asset('') }}/akreditasi-kehutanan.pdf"  alt="">
                            <div class="d-grid gap-2 mt-3">
                                <a href="{{ asset('') }}/akreditasi-kehutanan.pdf" class="btn btn-success">Kehutanan<br>Download File Akreditasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section><!-- End Events Section -->

</main><!-- End #main -->
@endsection
