<div class="modal fade" id="editDataPersyaratan{{$persyaratan->id}}" tabindex="-1" aria-labelledby="modalEditPersyaratan{{$persyaratan->id}}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEdit{{$persyaratan->id}}">Ubah Data Persyaratan {{$persyaratan->jenis_persyaratan == 1 ? 'Tekstual' : 'Kondisional'}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="{{route('syarat.update', ['syarat' => $persyaratan->id])}}">
                    @csrf
                    @method('put')
                    <div class="row g-3">
                        <div class="col-lg-12 mb-3">
                            <input type="hidden" name="id_penerimaan" id="id_penerimaan" value="{{$penerimaan->first()->id}}">
                            <input type="hidden" name="syarat_id" id="syarat_id" value="{{$persyaratan->id}}">
                            <input type="hidden" name="ejenis_persyaratan" id="ejenis_persyaratan" value="{{$persyaratan->jenis_persyaratan}}">

                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="nama{{$persyaratan->id}}" class="form-label">Nama Syarat</label>
                                    <input type="text" value="{{$persyaratan->nama}}" class="form-control" name="enama" id="nama{{$persyaratan->id}}" placeholder="Masukkan nama persyaratan...">
                                </div>
                            </div><!--end col-->

                            <div class="kondisional {{$persyaratan->jenis_persyaratan == 1 ? 'd-none' : ''}}" id="kondisional">
                                <div class="col-lg-12 mb-3">
                                    <div>
                                        <label for="setting{{$persyaratan->id}}" class="form-label">Pengaturan Syarat</label>
                                        <select class="form-control" id="setting{{$persyaratan->id}}" data-choices data-choices-groups data-placeholder="Pilih Pengaturan Syarat" name="esetting">
                                            <option value="">Pilih Pengaturan Syarat</option>
                                            <optgroup label="Pengaturan Syarat">
                                                <option value="1" {{$persyaratan->setting == 1 ? 'selected' : ''}}>Kurang Dari (<)</option>
                                                <option value="2" {{$persyaratan->setting == 2 ? 'selected' : ''}}>Lebih Dari (>)</option>
                                                <option value="3" {{$persyaratan->setting == 3 ? 'selected' : ''}}>Sama Dengan (==)</option>
                                                <option value="4" {{$persyaratan->setting == 4 ? 'selected' : ''}}>Tidak Sama Dengan (==)</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-12 mb-3">
                                    <div>
                                        <label for="nilai{{$persyaratan->id}}" class="form-label">Nilai Persyaratan</label>
                                        <input type="number" value="{{$persyaratan->value}}" class="form-control" name="evalue" id="nilai{{$persyaratan->id}}" placeholder="Masukkan nilai persyaratan...">
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-12 mb-3">
                                    <div>
                                        <label for="deskripsi_cond" class="form-label">Deskripsi Persyaratan</label>
                                        <input type="text" class="form-control" name="edeskripsi_cond" id="deskripsi_cond" placeholder="Masukkan deskripsi persyaratan..." value="{{$persyaratan->deskripsi}}">
                                    </div>
                                </div><!--end col-->
                            </div>
                            <div class="tekstual {{$persyaratan->jenis_persyaratan == 2 ? 'd-none' : ''}}" id="tekstual">
                                <div class="col-lg-12 mb-3">
                                    <div>
                                        <label for="deskripsi_text" class="form-label">Isi Persyaratan</label>
                                        <input type="text" class="form-control" name="edeskripsi_text" id="deskripsi_text" placeholder="Masukkan isi persyaratan..." value="{{$persyaratan->deskripsi}}">
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
