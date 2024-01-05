@extends('layouts.guestmain')

@section('main')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/bg_5.jpg')">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Pendaftaran</h2>
                <ol>
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li>6. Konfirmasi</li>
                </ol>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Pendaftaran Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-between gy-4 mt-4">
                    <div class="col-lg-12">
                        <div class="portfolio-description">
                            <div class="container" data-aos="fade-up" data-aos-delay="100">
                                <div class="row gy-4">
                                    <div class="col-lg-12">
                                        <div
                                            class="info-item d-flex flex-column justify-content-center align-items-center mb-3">
                                            <h3>Review Data</h3>
                                            <div class="container">
                                                <h6>Silakan Review Data Kamu melakukan Kunci Data</h6>
                                                <form
                                                    action="{{ route('guest.registration.step6.verify', ['program' => $program->first()->id]) }}"
                                                    method="post">
                                                    @csrf

                                                    <a class="btn btn-danger float-start"
                                                        href="{{ route('guest.registration.step5', ['program' => $program->first()->id]) }}">
                                                        Kembali
                                                    </a>
                                                    <button class="btn btn-primary float-end" type="submit">
                                                        Lanjut
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- End Projet Details Section -->
    </main>
    <!-- End #main -->
@endsection
