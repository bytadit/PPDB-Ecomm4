<div class="modal fade" id="editDataJadwal{{$kegiatan->id}}" tabindex="-1" aria-labelledby="modalEditJadwal{{$kegiatan->id}}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEdit{{$kegiatan->id}}">Ubah Data Kegiatan {{$kegiatan->jenisKegiatan->nama}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="{{route('jadwal-kegiatan.update', ['jadwal_kegiatan' => $kegiatan->id])}}">
                    @csrf
                    @method('put')
                    <div class="row g-3">
                        <input type="hidden" name="eid_penerimaan" id="eid_penerimaan" value="{{$penerimaan->first()->id}}">
                        <input type="hidden" name="eid_kegiatan" id="eid_kegiatan" value="{{$kegiatan->id}}">
                        <div class="col-lg-12 mb-3">
                            <div>
                                <label for="etgl_awal" class="form-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="etgl_awal" value="{{\Carbon\Carbon::parse($kegiatan->tgl_awal)->format('Y-m-d')}}"
                                    placeholder="Tanggal Mulai Program ..." name="etgl_awal">
                                @error('tgl_awal')
                                    <span class="text-danger text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-12 mb-3">
                            <div>
                                <label for="etgl_akhir" class="form-label">Tanggal Akhir</label>
                                <input type="date" class="form-control" id="etgl_akhir" value="{{date('Y-m-d', strtotime($kegiatan->tgl_akhir))}}"
                                    placeholder="Tanggal Berakhir Program ..." name="etgl_akhir">
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
