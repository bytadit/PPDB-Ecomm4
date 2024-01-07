@extends('layouts.guestmain')

@section('main')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/bg_5.jpg')">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Pendaftaran</h2>
                <ol>
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li>5. Nilai Rapor</li>
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
                                            <h3>Nilai Rata-Rata Rapor</h3>
                                            <div class="container">
                                                <form action="{{ route('guest.registration.step5.post', ['program' => $program->first()->id]) }}" method="post">
                                                    @csrf
                                                    @foreach ($rapors as $index => $rapor)
                                                        <input type="hidden" name="idrapors[{{$index}}]" value="{{$rapor->id}}">
                                                        <div class="mb-3">
                                                            <label for="rapor{{$rapor->id}}" class="form-label">Rata-Rata Semester {{$rapor->nama_semester}}<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="number" class="form-control" id="rapor{{$rapor->id}}"
                                                                placeholder="Masukkan Rata-rata Nilai Rapor Semester {{$rapor->nama_semester}}..." name="rapors[{{$index}}]"
                                                                value="{{ session()->has('nilai') ? optional(collect(session()->get('nilai'))->where('id_rapor', $rapor->id)->first())['nilai_rata'] : '' }}" required>
                                                        </div>
                                                    @endforeach
                                                    <a class="btn btn-danger float-start"
                                                        href="{{ route('guest.registration.step4', ['program' => $program->first()->id]) }}">
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
