<div class="modal fade" id="createData" tabindex="-1" aria-labelledby="modalCreate">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreate">Tambah Riwayat Kunjungan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="/guestbook">
                    @csrf
                    <div class="row g-3">
                        <label for="getDataBtn" class="form-label">Cari Data Tamu</label>
                        <div class="d-flex align-items-center fw-medium mb-3 mt-0">
                            <button type="button" class="btn btn-lg btn-soft-primary mr-1" id="db-search">
                                <i class="ri-database-2-line"></i> <span >@lang('Cari di Database')</span>
                            </button>
                            <button type="button" class="btn btn-lg btn-soft-success mx-1" id="add-new">
                                <i class="ri-user-add-line"></i> <span >@lang('Tambah Baru')</span>
                            </button>
{{--                            <button class="btn btn-lg btn-soft-primary mx-1" id="api-search">--}}
{{--                                <i class="ri-chrome-line"></i> <span >@lang('Cari di API')</span>--}}
{{--                            </button>--}}
                        </div>
                    </div>
                    <div class="row g-3">
                        <input type="hidden" name="chosen_btn" id="chosen_btn" value="">
                        <input type="hidden" name="submit_state" id="submit_state" value="">
                        <div class="new-data d-none" id="new-data">
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama lengkap...">
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="identity_number" class="form-label">Nomor Identitas (NIP/NIM)</label>
                                    <input type="text" class="form-control" name="identity_number" id="identity_number" placeholder="Masukkan nomor identitas...">
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Gender</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="genderMale" value="1">
                                        <label class="form-check-label" for="genderMale">Pria</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="2">
                                        <label class="form-check-label" for="genderFemale">Wanita</label>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-12 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email anda...">
                            </div><!--end col-->
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Kategori Tamu</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="guest_category" id="guestMahasiswa" value="1">
                                        <label class="form-check-label" for="guestMahasiswa">Mahasiswa</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="guest_category" id="guestDosen" value="2">
                                        <label class="form-check-label" for="guestDosen">Dosen</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="guest_category" id="guestStaff" value="3">
                                        <label class="form-check-label" for="guestStaff">Staff</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="guest_category" id="guestOthers" value="4">
                                        <label class="form-check-label" for="guestOthers">Lainnya</label>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="phone" class="form-label">No Telepon/Whatsapp</label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Masukkan nomor yang bisa dihubungi...">
                                </div>
                            </div><!--end col-->
                        </div>
                        <div class="search-db d-none" id="db-data">
                            <div class="col-lg-12 mb-3">
                                <label for="guest_id" class="form-label">Pilih Tamu</label>
                                <select class="form-control" id="guest_id" data-choices data-choices-groups  data-placeholder="Pilih Tamu" name="guest_id">
                                    <option value="">Pilih Tamu</option>
                                    <optgroup label="NIM/NIP">
                                        @foreach($guests as $guest)
                                            <option value="{{$guest->id}}">{{$guest->identity_number}} - {{$guest->name}}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="detail-data d-none" id="detail-data">
                            <div class="col-lg-12 mb-3">
                                <label for="unit_id" class="form-label">Pilih Unit</label>
                                <select class="form-control" id="unit_id" data-choices data-choices-groups  data-placeholder="Pilih Unit" name="unit_id">
                                    <option value="">Pilih Unit/Fakultas/Prodi</option>
                                    <optgroup label="Unit/Fakultas/Prodi">
                                        @foreach($units as $unit)
                                            <option value="{{$unit->id}}">{{$unit->name}} - {{$unit->display_name}}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <label for="problem_category_id" class="form-label">Keperluan</label>
                                <select id="problem_category_id" class="form-select mb-3" name="problem_category_id" aria-label="Default select example">
                                    <option selected>Pilih Keperluan</option>
                                    <option value="1">Masalah Email UNS</option>
                                    <option value="2">Cyber Attack</option>
                                    <option value="3">Information</option>
                                    <option value="4">Infrastruktur</option>
                                    <option value="5">IT Expertise and Skill</option>
                                    <option value="6">IT Invesment and Decision Making</option>
                                    <option value="7">Policy, Regulation Guideline, SOP</option>
                                    <option value="8">Software</option>
                                    <option value="9">Staff Operation (Human Error and Malicious Intent)</option>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <label for="description" class="form-label">Detail Keperluan</label>
{{--                                <textarea class="ckeditor-classic" name="description" id="description"></textarea>--}}
                                <textarea rows="5" name="description" class="form-control" id="description"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" id="submit-btn" value="false">Submit</button>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $("#add-new").on("click", function(){
        $("#chosen_btn").val('new-data');

        $('#db-data').removeClass('d-block');
        $('#db-data').addClass('d-none');
        $('#db-search').removeClass('btn-primary');
        $('#db-search').addClass('btn-soft-primary');

        $('#new-data').removeClass('d-none');
        $('#add-new').removeClass('btn-soft-success');
        $('#add-new').addClass('btn-success');
        $('#new-data').addClass('d-block');

        $('#detail-data').removeClass('d-none');
        $('#detail-data').addClass('d-block');
    });

    $("#db-search").on("click", function(){
        $("#chosen_btn").val('db-data');

        $('#new-data').removeClass('d-block');
        $('#new-data').addClass('d-none');
        $('#add-new').removeClass('btn-success');
        $('#add-new').addClass('btn-soft-success');

        $('#db-data').removeClass('d-none');
        $('#db-search').removeClass('btn-soft-primary');
        $('#db-search').addClass('btn-primary');
        $('#db-data').addClass('d-block');

        $('#detail-data').removeClass('d-none');
        $('#detail-data').addClass('d-block');
    });
    $("#submit-btn").on("click", function (){
        $("#submit_state").val(true);
    })
</script>
