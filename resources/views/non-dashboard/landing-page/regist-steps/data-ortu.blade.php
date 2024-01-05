@extends('layouts.guestmain')

@section('main')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/bg_5.jpg')">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Pendaftaran</h2>
                <ol>
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li>3. Data Orang Tua atau Wali</li>
                </ol>
            </div>
        </div>
        <!-- End Breadcrumbs -->
        <!-- ======= Pendaftaran Section ======= -->
        <section id="data-ortu" class="contact">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-between gy-4 mt-4">
                    <div class="col-lg-12">
                        <div class="portfolio-description">
                            <div class="container" data-aos="fade-up" data-aos-delay="100">
                                <div class="row gy-4">
                                    <div class="col-lg-12">
                                        <div
                                            class="info-item d-flex flex-column justify-content-center align-items-center">
                                            <form
                                                action="{{ route('guest.registration.step3.post', ['program' => $program->first()->id]) }}"
                                                method="post" class="container">
                                                @csrf
                                                <div class="container mb-3" data-aos="fade-up" data-aos-delay="100">
                                                    <div class="row gy-4">
                                                        <div class="col-lg-12">
                                                            <div class="card mb-3 d-flex flex-column p-3">
                                                                <h3 class="text-center m-3">Data Ayah</h3>
                                                                <div class="mb-3">
                                                                    <label for="nama" class="form-label">Nama Lengkap
                                                                        <span class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="nama" name="nama_ayah"
                                                                        placeholder="Masukkan Nama Lengkap..."
                                                                        required=""
                                                                        value="{{ session()->has('orangtua') ? $ortu->where('status', 1)->first()->nama : ''}}">

                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="pekerjaan_ayah" class="form-label">Pekerjaan
                                                                        Ayah</label>
                                                                    <select class="form-control" id="pekerjaan_ayah"
                                                                        data-choices data-choices-groups
                                                                        data-placeholder="Pilih Pekerjaan Ayah"
                                                                        name="pekerjaan_ayah">
                                                                        <option value="">Pilih Pekerjaan Ayah</option>
                                                                        <optgroup label="Pekerjaan Ayah">
                                                                            <option value="1"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 1)->first()->pekerjaan == 1 ? 'selected' : '' }}
                                                                            @endif
                                                                            >PNS</option>
                                                                            <option value="2"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 1)->first()->pekerjaan == 2 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Pengusaha</option>
                                                                            <option value="3"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 1)->first()->pekerjaan == 3 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Halo Dek</option>
                                                                            <option value="4"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 1)->first()->pekerjaan == 4 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Presiden</option>
                                                                            <option value="5"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 1)->first()->pekerjaan == 5 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Ketua Partai</option>
                                                                            <option value="6"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 1)->first()->pekerjaan == 6 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Youtuber</option>
                                                                            <option value="7"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 1)->first()->pekerjaan == 7 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Lain-lain</option>
                                                                        </optgroup>
                                                                    </select>

                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="penghasilan_ayah"
                                                                        class="form-label">Penghasilan
                                                                        Ayah</label>
                                                                    <select class="form-control" id="penghasilan_ayah"
                                                                        data-choices data-choices-groups
                                                                        data-placeholder="Pilih Penghasilan Ayah"
                                                                        name="penghasilan_ayah">
                                                                        <option value="">Pilih Penghasilan Ayah Per
                                                                            Bulan</option>
                                                                        <optgroup label="Penghasilan Ayah Per Bulan">
                                                                            <option value="1"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 1)->first()->penghasilan == 1 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Dibawah 1.000.000</option>
                                                                            <option value="2"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 1)->first()->penghasilan == 2 ? 'selected' : '' }}
                                                                            @endif
                                                                            >1.000.000 - 3000.0000</option>
                                                                            <option value="3"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 1)->first()->penghasilan == 3 ? 'selected' : '' }}
                                                                            @endif
                                                                            >3.000.000 - 10000.0000</option>
                                                                            <option value="4"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 1)->first()->penghasilan == 4 ? 'selected' : '' }}
                                                                            @endif
                                                                            >10.000.000 - 30.000.0000</option>
                                                                            <option value="5"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 1)->first()->penghasilan == 5 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Diatas 30.000.0000</option>
                                                                        </optgroup>
                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <div class="card mb-3 d-flex flex-column p-3">
                                                                <h3 class="text-center m-3">Data Ibu</h3>
                                                                <div class="mb-3">
                                                                    <label for="nama" class="form-label">Nama Lengkap
                                                                        <span class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="nama" name="nama_ibu"
                                                                        placeholder="Masukkan Nama Lengkap..."
                                                                        required=""
                                                                        value="{{ session()->has('orangtua') ? $ortu->where('status', 2)->first()->nama : '' }}">
                                                                    <div class="invalid-feedback">
                                                                        Masukkan Nama Lengkap dengan benar!
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="pekerjaan_ibu"
                                                                        class="form-label">Pekerjaan
                                                                        Ibu</label>
                                                                    <select class="form-control" id="pekerjaan_ibu"
                                                                        data-choices data-choices-groups
                                                                        data-placeholder="Pilih Pekerjaan Ibu"
                                                                        name="pekerjaan_ibu">
                                                                        <option value="">Pilih Pekerjaan ibu</option>
                                                                        <optgroup label="Pekerjaan Ibu">
                                                                            <option value="1"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 2)->first()->pekerjaan == 1 ? 'selected' : '' }}
                                                                            @endif
                                                                            >PNS</option>
                                                                            <option value="2"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 2)->first()->pekerjaan == 2 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Pengusaha</option>
                                                                            <option value="3"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 2)->first()->pekerjaan == 3 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Halo Dek</option>
                                                                            <option value="4"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 2)->first()->pekerjaan == 4 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Presiden</option>
                                                                            <option value="5"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 2)->first()->pekerjaan == 5 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Ketua Partai</option>
                                                                            <option value="6"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 2)->first()->pekerjaan == 6 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Youtuber</option>
                                                                            <option value="7"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 2)->first()->pekerjaan == 7 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Lain-lain</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="penghasilan_ibu"
                                                                        class="form-label">Penghasilan
                                                                        Ibu</label>
                                                                    <select class="form-control" id="penghasilan_ibu"
                                                                        data-choices data-choices-groups
                                                                        data-placeholder="Pilih Penghasilan Ibu"
                                                                        name="penghasilan_ibu">
                                                                        <option value="">Pilih Penghasilan Ibu Per
                                                                            Bulan</option>
                                                                        <optgroup label="Penghasilan Ibu Per Bulan">
                                                                            <option value="1"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 2)->first()->penghasilan == 1 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Dibawah 1.000.000</option>
                                                                            <option value="2"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 2)->first()->penghasilan == 2 ? 'selected' : '' }}
                                                                            @endif
                                                                            >1.000.000 - 3000.0000</option>
                                                                            <option value="3"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 2)->first()->penghasilan == 3 ? 'selected' : '' }}
                                                                            @endif
                                                                            >3.000.000 - 10000.0000</option>
                                                                            <option value="4"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 2)->first()->penghasilan == 4 ? 'selected' : '' }}
                                                                            @endif
                                                                            >10.000.000 - 30.000.0000</option>
                                                                            <option value="5"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 2)->first()->penghasilan == 5 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Diatas 30.000.0000</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="card mb-3 d-flex flex-column p-3">
                                                                <h3 class="text-center m-3">Data Wali</h3>
                                                                <div class="mb-3">
                                                                    <label for="nama" class="form-label">Nama Lengkap
                                                                        <span class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="nama" name="nama_wali"
                                                                        placeholder="Masukkan Nama Lengkap..."
                                                                        required=""
                                                                        value="{{ session()->has('orangtua') ? $ortu->where('status', 3)->first()->nama : '' }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="gender" class="form-label">Jenis Kelamin
                                                                        <span class="text-danger">*</span></label>
                                                                    <div class="form-check form-radio-primary mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="gender" id="genderMale"
                                                                            value="1"
                                                                            @if(session()->has('orangtua'))
                                                                                {{$ortu->where('status', 3)->first()->gender == 1 ? "checked" : "" }}
                                                                            @endif
                                                                            >
                                                                        <label class="form-check-label" for="genderMale">
                                                                            Laki-Laki
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-radio-danger mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="gender" id="genderFemale"
                                                                            value="2"
                                                                            @if(session()->has('orangtua'))
                                                                            {{ $ortu->where('status', 3)->first()->gender == 2 ? "checked" : "" }}
                                                                            @endif
                                                                            >
                                                                        <label class="form-check-label"
                                                                            for="genderFemale">
                                                                            Perempuan
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="pekerjaan_wali"
                                                                        class="form-label">Pekerjaan
                                                                        Wali</label>
                                                                    <select class="form-control" id="pekerjaan_wali"
                                                                        data-choices data-choices-groups
                                                                        data-placeholder="Pilih Pekerjaan Wali"
                                                                        name="pekerjaan_wali">
                                                                        <option value="">Pilih Pekerjaan Wali
                                                                        </option>
                                                                        <optgroup label="Pekerjaan Wali">
                                                                            <option value="1"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 3)->first()->pekerjaan == 1 ? 'selected' : '' }}
                                                                            @endif
                                                                            >PNS</option>
                                                                            <option value="2"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 3)->first()->pekerjaan == 2 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Pengusaha</option>
                                                                            <option value="3"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 3)->first()->pekerjaan == 3 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Halo Dek</option>
                                                                            <option value="4"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 3)->first()->pekerjaan == 4 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Presiden</option>
                                                                            <option value="5"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 3)->first()->pekerjaan == 5 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Ketua Partai</option>
                                                                            <option value="6"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 3)->first()->pekerjaan == 6 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Youtuber</option>
                                                                            <option value="7"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 3)->first()->pekerjaan == 7 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Lain-lain</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="penghasilan_wali"
                                                                        class="form-label">Penghasilan
                                                                        Wali</label>
                                                                    <select class="form-control" id="penghasilan_wali"
                                                                        data-choices data-choices-groups
                                                                        data-placeholder="Pilih Penghasilan Wali"
                                                                        name="penghasilan_wali">
                                                                        <option value="">Pilih Penghasilan Wali Per
                                                                            Bulan</option>
                                                                        <optgroup label="Penghasilan Wali Per Bulan">
                                                                            <option value="1"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 3)->first()->penghasilan == 1 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Dibawah 1.000.000</option>
                                                                            <option value="2"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 3)->first()->penghasilan == 2 ? 'selected' : '' }}
                                                                            @endif
                                                                            >1.000.000 - 3000.0000</option>
                                                                            <option value="3"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 3)->first()->penghasilan == 3 ? 'selected' : '' }}
                                                                            @endif
                                                                            >3.000.000 - 10000.0000</option>
                                                                            <option value="4"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 3)->first()->penghasilan == 4 ? 'selected' : '' }}
                                                                            @endif
                                                                            >10.000.000 - 30.000.0000</option>
                                                                            <option value="5"
                                                                            @if(session()->has('orangtua'))
                                                                                {{ $ortu->where('status', 3)->first()->penghasilan == 5 ? 'selected' : '' }}
                                                                            @endif
                                                                            >Diatas 30.000.0000</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-danger float-start"
                                                        href="{{ route('guest.registration.step2', ['program' => $program->first()->id]) }}">
                                                        Kembali
                                                    </a>
                                                    <button class="btn btn-primary float-end" type="submit">
                                                        Lanjut
                                                    </button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
