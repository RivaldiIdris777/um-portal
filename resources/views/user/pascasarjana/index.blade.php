@push('styles')
<style>
    #heropascasarjana {
        width: 100%;
        height: 80vh;
        background: url("{{ asset('') }}frontend/img/sano-bg.png") top center;
        background-size: cover;
        position: relative;
    }

    #heropascasarjana:before {
        content: "";
        background: rgba(0, 0, 0, 0.4);
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
    }

    #heropascasarjana .container {
        padding-top: 72px;
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
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center" style="background: url('{{ Storage::url('public/slider/').$slider->gambar }}') top center; background-size: cover; max-width:100%;">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>PASCASARJANA<br><span style="color:red;"> Fakultas Ekonomi dan Bisnis</span></h1>
        <h2>Program Studi Ekonomi Pembangunan</h2>
        <a href="{{ $link->url }}" class="btn-get-started">Daftar</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                @forelse ( $pasca as $ps )
                <div class="col-md-12 d-flex align-items-stretch mt-3">
                    <div class="card">
                        <img src="{{ Storage::url('public/pascasarjana/').$ps->gambar }}" alt="...">
                    </div>
                </div>
                @empty

                @endforelse
            </div>
        </div>
    </section><!-- End About Section -->


</main><!-- End #main -->

@endsection
