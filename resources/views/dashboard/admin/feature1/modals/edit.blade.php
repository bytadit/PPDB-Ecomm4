<div class="modal fade" id="editData{{$guest_book->id}}" tabindex="-1" aria-labelledby="modalEdit{{$guest_book->id}}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEdit{{$guest_book->id}}">Ubah Data Riwayat Kunjungan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="/guestbook/{{$guest_book->id}}">
                    @csrf
                    @method('put')
                    <div class="row g-3">
                        <input type="hidden" name="guestbook_id" value="{{$guest_book->id}}">
                        <div class="col-lg-12 mb-3">
                            <label for="guest_id" class="form-label">Pilih Tamu</label>
                            <select class="form-control" id="guest_id" data-choices data-choices-groups  data-placeholder="Pilih Tamu" name="guest_id">
                                <option value="">Pilih Tamu</option>
                                <optgroup label="NIM/NIP">
                                    @foreach($guests as $guest)
                                        <option value="{{$guest->id}}" {{$guest->id == $guest_book->guest_id ? 'selected' : ''}}>{{$guest->identity_number}} - {{$guest->name}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label for="unit_id" class="form-label">Pilih Unit</label>
                            <select class="form-control" id="unit_id" data-choices data-choices-groups  data-placeholder="Pilih Unit" name="unit_id">
                                <option value="">Pilih Unit/Fakultas/Prodi</option>
                                <optgroup label="Unit/Fakultas/Prodi">
                                    @foreach($units as $unit)
                                        <option value="{{$unit->id}}" {{$unit->id == $guest_book->unit_id ? 'selected' : ''}}>{{$unit->name}} - {{$unit->display_name}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label for="problem_category_id" class="form-label">Keperluan</label>
                            <select id="problem_category_id" class="form-select mb-3" name="problem_category_id" aria-label="Default select example">
                                <option selected>Pilih Keperluan</option>
                                <option value="1" {{$guest_book->problem_category_id == 1 ? 'selected' : ''}}>Masalah Email UNS</option>
                                <option value="2" {{$guest_book->problem_category_id == 2 ? 'selected' : ''}}>Cyber Attack</option>
                                <option value="3" {{$guest_book->problem_category_id == 3 ? 'selected' : ''}}>Information</option>
                                <option value="4" {{$guest_book->problem_category_id == 4 ? 'selected' : ''}}>Infrastruktur</option>
                                <option value="5" {{$guest_book->problem_category_id == 5 ? 'selected' : ''}}>IT Expertise and Skill</option>
                                <option value="6" {{$guest_book->problem_category_id == 6 ? 'selected' : ''}}>IT Invesment and Decision Making</option>
                                <option value="7" {{$guest_book->problem_category_id == 7 ? 'selected' : ''}}>Policy, Regulation Guideline, SOP</option>
                                <option value="8" {{$guest_book->problem_category_id == 8 ? 'selected' : ''}}>Software</option>
                                <option value="9" {{$guest_book->problem_category_id == 9 ? 'selected' : ''}}>Staff Operation (Human Error and Malicious Intent)</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label for="description" class="form-label">Detail Keperluan</label>
                            {{--                                <textarea class="ckeditor-classic" name="description" id="description"></textarea>--}}
                            <textarea rows="5" name="description" value="{{$guest_book->description}}" class="form-control" id="description">{{$guest_book->description}}</textarea>
                        </div>
                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </form>
            </div>
        </div>
    </div>
</div>
