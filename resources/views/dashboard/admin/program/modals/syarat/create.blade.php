<div class="modal fade" id="createDataPersyaratan" tabindex="-1" aria-labelledby="modalCreatePersyaratan">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreatePersyaratan">Tambah Data Persyaratan Opsional</h5>
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
                                    <label for="jenis_persyaratan" class="form-label">Jenis Persyaratan</label>
                                    <select class="form-control" id="jenis_persyaratan" data-choices data-choices-groups data-placeholder="Pilih Jenis Persyaratan" name="jenis_persyaratan">
                                        <option value="">Pilih Jenis Persyaratan</option>
                                        <optgroup label="Jenis Persyaratan">
                                            <option value="1">Tekstual</option>
                                            <option value="2">Kondisional</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div><!--end col-->
                            <div class="kondisional d-none" id="kondisional">
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
                                        <label for="value" class="form-label">Isi Persyaratan</label>
                                        <input type="number" class="form-control" name="value" id="value" placeholder="Masukkan isi persyaratan...">
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-12 mb-3">
                                    <div>
                                        <label for="deskripsi" class="form-label">Deskripsi Persyaratan</label>
                                        <input type="text" class="form-control" name="deskripsi_cond" id="deskripsi" placeholder="Masukkan deskripsi persyaratan...">
                                    </div>
                                </div><!--end col-->
                            </div>
                            <div class="tekstual d-none" id="tekstual">
                                <div class="col-lg-12 mb-3">
                                    <div>
                                        <label for="deskripsi" class="form-label">Isi Persyaratan</label>
                                        <input type="text" class="form-control" name="deskripsi_text" id="deskripsi" placeholder="Masukkan isi persyaratan...">
                                    </div>
                                </div><!--end col-->
                            </div>
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
<script>
    $("#jenis_persyaratan").on("change", function(){
        let selectedValue = $(this).val();
        if(selectedValue == 1){
            $('#kondisional').removeClass('d-block');
            $('#kondisional').addClass('d-none');
            $('#tekstual').removeClass('d-none');
            $('#tekstual').addClass('d-block');
        }else if(selectedValue == 2){
            $('#tekstual').removeClass('d-block');
            $('#tekstual').addClass('d-none');
            $('#kondisional').removeClass('d-none');
            $('#kondisional').addClass('d-block');
        }
    });
</script>
