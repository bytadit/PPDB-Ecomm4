<div class="modal fade" id="createDataPersyaratan" tabindex="-1" aria-labelledby="modalCreatePersyaratan">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreatePersyaratan">Tambah Data Persyaratan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="{{route('syarat.store')}}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-lg-12 mb-3">
                            <input type="hidden" name="id_penerimaan" id="id_penerimaan" value="{{$penerimaan->first()->id}}">
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="nama" class="form-label">Nama Syarat</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama persyaratan...">
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="setting" class="form-label">Pengaturan Syarat</label>
                                    <select class="form-control" id="setting" data-choices data-choices-groups data-placeholder="Pilih Pengaturan Syarat" name="setting">
                                        <option value="">Pilih Pengaturan Syarat</option>
                                        <optgroup label="Pengaturan Syarat">
                                            <option value="1">Kurang Dari (<)</option>
                                            <option value="2">Lebih Dari (>)</option>
                                            <option value="3">Sama Dengan (==)</option>
                                            <option value="4">Tidak Sama Dengan (==)</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="value" class="form-label">Nilai Persyaratan</label>
                                    <input type="number" class="form-control" name="value" id="value" placeholder="Masukkan nilai persyaratan...">
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-12">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" id="submit-btn" value="false">Submit</button>
                                </div>
                            </div><!--end col-->
                        </div><!--end col-->
                    </div><!--end row-->
                </form>
            </div>
        </div>
    </div>
</div>
