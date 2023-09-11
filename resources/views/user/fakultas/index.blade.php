@extends('layoutsfrontend.app')
@section('contentfrontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Fakultas UM Jambi</h2>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="row">



                </object>
                <div class="col-md-12 d-flex justify-content-center mt-3">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="1">
                                            <img src="{{ asset('') }}img/fakultas123.png" alt="">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $ekonomi[0]->fakultas()->first()->nama_fakultas }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @forelse ( $ekonomi as $ek )
                                            <ul>
                                                <li>{{ $ek->nama_prodi }}</li>
                                            </ul>
                                            @empty
                                            @endforelse
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $teknologi[0]->fakultas()->first()->nama_fakultas }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @forelse ( $teknologi as $tk )
                                            <ul>
                                                <li>{{ $tk->nama_prodi }}</li>
                                            </ul>
                                            @empty
                                            @endforelse
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section><!-- End Events Section -->

</main><!-- End #main -->
@endsection
