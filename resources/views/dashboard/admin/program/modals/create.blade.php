<div class="modal fade" id="createData" tabindex="-1" aria-labelledby="modalCreate">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreate">Tambah Program Penerimaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="{{route('program-penerimaan.store')}}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-lg-12 mb-3">
                            <div>
                                <label for="periode" class="form-label">Periode</label>
                                <input type="number" class="form-control" name="periode" id="periode" placeholder="Masukkan periode program...">
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-12 mb-3">
                            <label for="guest_id" class="form-label">Pilih Jalur</label>
                            <select class="form-control" id="id_jalur" data-choices data-choices-groups  data-placeholder="Pilih Jalur" name="id_jalur">
                                <option value="">Pilih Jalur</option>
                                <optgroup label="Jalur Penerimaan">
                                    @foreach($jalurs as $jalur)
                                        <option value="{{$jalur->id}}">{{$jalur->nama}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
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
