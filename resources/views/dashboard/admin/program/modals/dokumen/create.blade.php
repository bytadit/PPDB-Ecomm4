<div class="modal fade" id="createDataDokumen" tabindex="-1" aria-labelledby="modalCreateDokumen">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreateDokumen">Tambah Data Dokumen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="{{route('document.store')}}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-lg-12 mb-3">
                            <input type="hidden" name="id_penerimaan" id="id_penerimaan" value="{{$penerimaan->first()->id}}">
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="nama" class="form-label">Nama Dokumen</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama dokumen...">
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
                                    <label for="tipe" class="form-label">Tipe Dokumen</label>
                                    <select class="form-control" id="tipe" data-choices data-choices-groups data-placeholder="Pilih Tipe Dokumen" name="tipe">
                                        <option value="">Pilih Tipe Dokumen</option>
                                        <optgroup label="Tipe Dokumen">
                                            <option value="1">PDF</option>
                                            <option value="2">DOCX</option>
                                            <option value="3">Gambar</option>
                                            <option value="4">Video</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="jumlah" class="form-label">Jumlah Dokumen</label>
                                    <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Masukkan jumlah dokumen...">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="deskripsi" class="form-label">Deskripsi Dokumen</label>
                                    <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi dokumen..."></textarea>
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
