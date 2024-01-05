@extends('layouts.guestmain')

@section('main')
<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs d-flex align-items-center" style="background-image: url('public\img\bg_5.jpg')">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
          <h2>Pendaftaran</h2>
          <ol>
            <li><a href="{{ url("home") }}">Home</a></li>
            <li>1. Ketentuan Pendaftaran</li>
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
                      <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <h3>Ketentuan Program</h3>
                        <div class="container m-3">
                            <h3>Biaya Program</h3>
                            <ul>
                                <li>Biaya Pendaftaran: @currency($program->first()->biaya_pendaftaran) </li>
                                @foreach ($biayas as $biaya)
                                    <li>Biaya {{$biaya->nama}}
                                    @if($biaya->setting == 1)
                                        Maksimal
                                    @elseif ($biaya->setting == 2)
                                        Minimal
                                    @elseif ($biaya->setting == 3)
                                        Senilai
                                    @elseif ($biaya->setting == 4)
                                        Tidak Boleh
                                    @endif
                                     @currency($biaya->nominal)
                                    </li>
                                @endforeach
                            </ul>
                            <h3>Persyaratan Program</h3>
                            <ul>
                                @foreach ($persyaratans as $persyaratan)
                                <li>
                                    @if($persyaratan->jenis_persyaratan == 2)
                                        {{$persyaratan->nama}}
                                        @if($persyaratan->setting == 1)
                                            Maksimal
                                        @elseif ($persyaratan->setting == 2)
                                            Minimal
                                        @elseif ($persyaratan->setting == 3)
                                            Senilai
                                        @elseif ($persyaratan->setting == 4)
                                            Tidak Boleh
                                        @endif
                                         {{$persyaratan->value}} tahun
                                    @elseif ($persyaratan->jenis_persyaratan == 1)
                                        {{$persyaratan->deskripsi}}
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                            <h3>Dokumen Program</h3>
                            <ul>
                                @foreach ($dokumens as $dokumen)
                                    <li>
                                        {{$dokumen->deskripsi}}
                                    </li>
                                @endforeach
                            </ul>
                            <h3>Ketentuan Nilai Rapor</h3>
                            <ul>
                                @foreach ($rapors as $rapor)
                                    <li>
                                        Semester {{$rapor->nama_semester}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        </div>
                    </div>

                    <div class="testimonial-item">
                      <p>Apakah Anda setuju dengan ketentuan diatas?</p>
                      <div class="form-check" >
                        <input type="checkbox" id="myCheck" class="ketentuan" />
                        <label class="form-check-label" for="ketentuan">Ya, Saya Setuju</label>
                      </div>
                    </div>

                  </div>
                </div>


                </div>
                <a class="btn btn-primary float-end" href="{{ route('guest.registration.step2', ['program' => $program->first()->id]) }}">Lanjut</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Projet Details Section -->
    </main>
    <!-- End #main -->
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var checkbox = document.getElementById("myCheck");

        if (checkbox && checkbox.checked) {
            console.log("Checkbox is checked");
        } else {
            console.log("Checkbox is not checked");
        }
    });
</script>
