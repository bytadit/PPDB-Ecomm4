<div class="modal fade" id="createDataJadwal" tabindex="-1" aria-labelledby="modalCreateJadwal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreate">Tambah Data Kegiatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="{{route('jadwal-kegiatan.store')}}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-lg-12 mb-3">
                            <input type="hidden" name="id_penerimaan" id="id_penerimaan" value="{{$penerimaan->first()->id}}">
                            <div>
                                <label for="id_jenis_kegiatan" class="form-label">Jenis Kegiatan</label>
                                <select class="form-control" id="id_jenis_kegiatan" data-choices data-choices-groups  data-placeholder="Pilih Jenis Kegiatan" name="id_jenis_kegiatan">
                                    <option value="">Pilih Jenis Kegiatan</option>
                                    <optgroup label="Jenis Kegiatan">
                                        @foreach($jenis_kegiatans->whereNotIn('id', $kegiatans->where('id_penerimaan', $penerimaan->first()->id)->pluck('id_jenis_kegiatan')) as $jenis_kegiatan)
                                            <option value="{{$jenis_kegiatan->id}}">{{$jenis_kegiatan->nama}}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-12 mb-3">
                            <div>
                                <label for="tgl_awal" class="form-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="tgl_awal"
                                    placeholder="Tanggal Mulai Program ..." name="tgl_awal">
                                @error('tgl_awal')
                                    <span class="text-danger text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-12 mb-3">
                            <div>
                                <label for="tgl_akhir" class="form-label">Tanggal Akhir</label>
                                <input type="date" class="form-control" id="tgl_akhir"
                                    placeholder="Tanggal Berakhir Program ..." name="tgl_akhir">
                                @error('tgl_akhir')
                                    <span class="text-danger text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!--end col-->
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
