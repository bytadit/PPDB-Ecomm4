@extends('layouts.guestmain')

@section('main')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/bg_5.jpg')">
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
                                                <div class="card m-3 p3 text-center countdown-container" id="countdown-cont">
                                                    <h1>Batas Pembayaran : <span id="countdown"></span></h1>
                                                </div>
                                                <div class="card m-3 p3 text-center info-container d-none" id="info-cont">
                                                    <h1>Selamat akun anda telah terdaftar!</h1>
                                                    <p>Berikut informasi login, harap dicatat</p>
                                                    <ul>
                                                        <li>NIK: <span id="nomor-nik"></span></li>
                                                        <li>E-mail: <span id="alamat-email"></span></li>
                                                        <li>Password: <span id="password-login"></span></li>
                                                    </ul>
                                                </div>
                                                {{-- <div class="card m-3 p3 text-center status-message d-none">
                                                    <h1>Pembayaran Berhasil</h1>
                                                </div> --}}
                                                {{-- <form
                                                    action="{{ route('guest.registration.payment.post', ['program' => $program->first()->id]) }}"
                                                    method="post" class="d-flex justify-content-center mt-3">
                                                    @csrf
                                                    <button class="btn btn-primary" type="submit">
                                                        Bayar Sekarang
                                                    </button>
                                                </form> --}}
                                                <button id="payButton" onclick="postPayment({{$program->first()->id}})" class="btn btn-primary">
                                                    Bayar Sekarang
                                                </button>
                                                <a id="loginButton" href="{{route('login')}}" class="btn btn-primary d-none">
                                                    Masuk Akun Sekarang
                                                </a>
                                                {{-- <button id="payButton" onclick="initiatePayment()">Pay</button> --}}
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
            let expirationTime = '{{ \Carbon\Carbon::parse(Session::get("verify.expiration_time"))->toISOString() }}';
            document.addEventListener('DOMContentLoaded', function() {
                var expirationDate = new Date(expirationTime);
                var countdownInterval = setInterval(updateCountdown, 1000);

                function updateCountdown() {
                    var now = new Date();
                    var timeDifference = expirationDate - now;

                    if (timeDifference <= 0) {
                        clearInterval(countdownInterval);
                        document.getElementById('countdown').innerHTML = 'Telah Habis';
                    } else {
                        var hours = Math.floor(timeDifference / (1000 * 60 * 60));
                        var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);
                        document.getElementById('countdown').innerHTML = hours + 'h ' + minutes + 'm ' + seconds + 's';
                    }
                }
            });
        </script>
        <script>
            function postPayment(program) {
                document.getElementById('payButton').disabled = true;
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: '/daftar-program/'+ program +'/pembayaran',
                    type: 'POST',
                    data: {
                        _token: csrfToken
                    },
                    success: function(response) {
                        window.open(response.payment_link, '_blank');
                        checkPaymentStatus(program, response.payment_id);
                    },
                    error: function(error) {
                        console.error('Error initiating payment:', error);
                    }
                });
            }
            function checkPaymentStatus(program, paymentId) {
                let paymentCompleted = false;
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                const interval = setInterval(function() {
                    $.ajax({
                        url: '/daftar-program/'+ program +'/pembayaran/'+ paymentId +'/status',
                        type: 'POST',
                        data: {
                            _token: csrfToken
                        },
                        success: function(response) {
                            console.log('Response:', response);
                            if (response.status === 'PAID' && !paymentCompleted) {
                                // Update frontend and display success message
                                clearInterval(interval);
                                paymentCompleted = true;
                                document.getElementById('payButton').disabled = false;
                                alert('Pembayaran Berhasil!');
                                $('#nomor-nik').text(response.nik);
                                $('#alamat-email').text(response.email);
                                $('#password-login').text(response.password);
                                $('#loginButton').removeClass('d-none');
                                $('#payButton').addClass('d-none');
                                $('#countdown-cont').addClass('d-none');
                                $('#info-cont').removeClass('d-none');
                            }
                        },
                        error: function(error) {
                            console.error('Error finishing payment:', error);
                        }
                    });
                }, 1000);
            }
        </script>
    </main>
@endsection
