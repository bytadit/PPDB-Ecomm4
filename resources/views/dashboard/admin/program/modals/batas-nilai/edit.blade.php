<div class="modal fade" id="ubahDataNilai" tabindex="-1" aria-labelledby="modalUbahDataNilai">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalUbahDataNilai">Ubah Batas Nilai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="{{route('batas-nilai', ['penerimaan' => $penerimaan->first()->id])}}">
                    @csrf
                    @method('put')
                    <div class="row g-3">
                        <div class="col-lg-12 mb-3">
                            <input type="hidden" name="id_penerimaan" id="id_penerimaan" value="{{$penerimaan->first()->id}}">
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="tes_akademik" class="form-label">Batas Tes Akademik</label>
                                    <input type="number" min="1" class="form-control" name="tes_akademik" id="tes_akademik" placeholder="Masukkan batas tes akademik..." value="{{ $batas_nilai->count() > 0 ? $batas_nilai->first()->tes_akademik : 0 }}">
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="tes_wawancara" class="form-label">Batas Tes Wawancara</label>
                                    <input type="number" min="1" class="form-control" name="tes_wawancara" id="tes_wawancara" placeholder="Masukkan batas tes wawancara..." value="{{ $batas_nilai->count() > 0 ? $batas_nilai->first()->tes_wawancara : 0 }}">
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <label for="nilai_akhir" class="form-label">Batas Nilai Akhir</label>
                                    <input type="number" min="1" class="form-control" name="nilai_akhir" id="nilai_akhir" placeholder="Masukkan batas nilai akhir..." value="{{ $batas_nilai->count() > 0 ? $batas_nilai->first()->nilai_akhir : 0 }}">
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
