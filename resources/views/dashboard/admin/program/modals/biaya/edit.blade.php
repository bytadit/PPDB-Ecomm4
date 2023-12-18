<div class="modal fade" id="editDataBiaya{{$biaya->id}}" tabindex="-1" aria-labelledby="modalEditBiaya{{$biaya->id}}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEdit{{$biaya->id}}">Ubah Data Biaya</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="{{route('biaya.update', ['biaya' => $biaya->id])}}">
                    @csrf
                    @method('put')
                    <div class="row g-3">
                        <div class="col-lg-12 mb-3">
                            <input type="hidden" name="id_penerimaan" id="id_penerimaan" value="{{$penerimaan->first()->id}}">
                            <input type="hidden" name="biaya_id" id="biaya_id" value="{{$biaya->id}}">
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="nama{{$biaya->id}}" class="form-label">Nama Biaya</label>
                                    <input type="text" value="{{$biaya->nama}}" class="form-control" name="enama" id="nama{{$biaya->id}}" placeholder="Masukkan nama biaya...">
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="setting{{$biaya->id}}" class="form-label">Pengaturan Biaya</label>
                                    <select class="form-control" id="setting{{$biaya->id}}" data-choices data-choices-groups data-placeholder="Pilih Pengaturan Biaya" name="esetting">
                                        <option value="">Pilih Pengaturan Biaya</option>
                                        <optgroup label="Pengaturan Biaya">
                                            <option value="1" {{$biaya->id == 1 ? 'selected' : ''}}>Kurang Dari (<)</option>
                                            <option value="2" {{$biaya->id == 2 ? 'selected' : ''}}>Lebih Dari (>)</option>
                                            <option value="3" {{$biaya->id == 3 ? 'selected' : ''}}>Sama Dengan (==)</option>
                                            <option value="4" {{$biaya->id == 4 ? 'selected' : ''}}>Tidak Sama Dengan (==)</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="nominal{{$biaya->id}}" class="form-label">Nominal Biaya</label>
                                    <input type="number" value="{{$biaya->nominal}}" class="form-control" name="enominal" id="nominal{{$biaya->id}}" placeholder="Masukkan nominal biaya...">
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
