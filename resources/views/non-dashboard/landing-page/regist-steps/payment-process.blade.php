@extends('layouts.guestmain')

@section('main')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/images/bgd_1.jpg')">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Pendaftaran</h2>
                <ol>
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li>7. Pembayaran</li>
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
                                            <h3>Pembayaran Pendaftaran</h3>
                                            <div class="container">
                                                <br>
                                                <div class="card m-3 p3 text-center countdown-container">
                                                    <h1>Batas Pembayaran : <span id="countdown"></span></h1>
                                                </div>
                                                <form
                                                    action="{{ route('guest.registration.payment.post', ['program' => $program->first()->id]) }}"
                                                    method="post" class="d-flex justify-content-center mt-3">
                                                    @csrf
                                                    <button class="btn btn-primary" type="submit">
                                                        Bayar Sekarang
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
        <script>

        </script>
    </main>
@endsection
