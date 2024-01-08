<div class="modal fade" id="verifikasiData{{$penerimaan_id}}" tabindex="-1" aria-labelledby="modalVerifikasiData">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalVerifikasiData">Verifikasi Data Pendaftar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="{{route('verifikasi-data', ['penerimaan' => $penerimaan_id, 'pendaftar' => $pendaftar->id])}}">
                    @csrf
                    @method('put')
                    <div class="row g-3">
                        <div class="col-lg-12 mb-3">
                            <input type="hidden" name="id_pendaftar" id="id_pendaftar" value="{{$pendaftar->id}}">
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="is_verified" class="form-label">Status Verifikasi Data</label>
                                    <select class="form-control" id="is_verified" data-choices data-choices-groups data-placeholder="Pilih Pengaturan Syarat" name="verifikasi_data">
                                        <option value="">Pilih Pengaturan Verifikasi</option>
                                        <optgroup label="Pengaturan Verifikasi">
                                            <option value="0" {{$pendaftar->is_verified == 0 ? 'selected' : ''}}>Belum Terverifikasi</option>
                                            <option value="1" {{$pendaftar->is_verified == 1 ? 'selected' : ''}}>Terverifikasi</option>
                                            <option value="2" {{$pendaftar->is_verified == 3 ? 'selected' : ''}}>Perbaikan</option>
                                        </optgroup>
                                    </select>
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
