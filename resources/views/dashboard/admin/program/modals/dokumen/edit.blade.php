<div class="modal fade" id="editDataDokumen{{$dokumen->id}}" tabindex="-1" aria-labelledby="modalEditDokumen{{$dokumen->id}}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditDokumen{{$dokumen->id}}">Ubah Data Dokumen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="{{route('document.update', ['document' => $dokumen->id])}}">
                    @csrf
                    @method('put')
                    <div class="row g-3">
                        <div class="col-lg-12 mb-3">
                            <input type="hidden" name="id_penerimaan" id="id_penerimaan{{$dokumen->id}}" value="{{$dokumen->id_penerimaan}}">
                            <input type="hidden" name="dokumen_id" id="dokumen_id" value="{{$dokumen->id}}">
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="enama" class="form-label">Nama Dokumen</label>
                                    <input type="text" class="form-control" name="enama" id="enama" placeholder="Masukkan nama dokumen..." value="{{$dokumen->nama}}">
                                </div>
                            </div>
                            {{-- <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="path" class="form-label">Path Dokumen</label>
                                    <input type="file" class="form-control" name="path" id="path" placeholder="Unggah Dokumen Kegiatan...">
                                </div>
                            </div> --}}
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="etipe" class="form-label">Tipe Dokumen</label>
                                    <select class="form-control" id="etipe" data-choices data-choices-groups data-placeholder="Pilih Tipe Dokumen" name="etipe">
                                        <option value="">Pilih Tipe Dokumen</option>
                                        <optgroup label="Tipe Dokumen">
                                            <option value="1" {{$dokumen->tipe == 1 ? 'selected' : ''}}>PDF</option>
                                            <option value="2" {{$dokumen->tipe == 2 ? 'selected' : ''}}>DOCX</option>
                                            <option value="3" {{$dokumen->tipe == 3 ? 'selected' : ''}}>Gambar</option>
                                            <option value="4" {{$dokumen->tipe == 4 ? 'selected' : ''}}>Video</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="ejumlah" class="form-label">Jumlah Dokumen</label>
                                    <input type="number" class="form-control" name="ejumlah" id="ejumlah" placeholder="Masukkan jumlah dokumen..." value="{{$dokumen->jumlah}}">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="edeskripsi" class="form-label">Deskripsi Dokumen</label>
                                    <textarea class="form-control" name="edeskripsi" id="edeskripsi" placeholder="Masukkan deskripsi dokumen...">{{$dokumen->deskripsi}}</textarea>
                                </div>
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
