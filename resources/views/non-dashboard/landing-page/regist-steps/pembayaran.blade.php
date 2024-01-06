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
                                                <div class="card m-3 p3 text-center countdown-container">
                                                    <h1>Batas Pembayaran : <span id="countdown"></span></h1>
                                                </div>
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
                        // sessionStorage.setItem('payment_id', response.payment_id);
                        window.open(response.payment_link);
                        checkPaymentStatus(program, response.payment_id);
                    },
                    error: function(error) {
                        console.error('Error initiating payment:', error);
                    }
                });
            }
            function checkPaymentStatus(program, paymentId) {
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                const interval = setInterval(function() {
                    $.ajax({
                        url: '/daftar-program/'+ program +'/pembayaran/'+ paymentId +'/status',
                        type: 'POST',
                        data: {
                            _token: csrfToken
                        },
                        success: function(response) {
                            if (response.status === 'PAID') {
                                // Update frontend and display success message
                                clearInterval(interval);
                                document.getElementById('payButton').disabled = false;
                                alert('Your payment is successful!');
                            }
                        },
                        error: function(error) {
                            // console.error('Error checking payment status:', error);
                        }
                    });
                }, 1000); // Check every 5 seconds (adjust as needed)
            }
        </script>
    </main>
@endsection
