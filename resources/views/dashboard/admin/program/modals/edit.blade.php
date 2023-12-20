<div class="modal fade" id="editData{{$jenjang->id}}" tabindex="-1" aria-labelledby="modalEdit{{$jenjang->id}}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEdit{{$jenjang->id}}">Ubah Data Jenjang Pendidikan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="{{route('jenjang-pendidikan.destroy', ['jenjang_pendidikan' => $jenjang->id])}}">
                    @csrf
                    @method('put')
                    <div class="row g-3">
                        <input type="hidden" name="jenjang_id" value="{{$jenjang->id}}">
                        <div class="col-lg-12">
                            <label for="enama" class="form-label">Nama Kegiatan</label>
                            <input type="text" class="form-control" name="enama" value="{{$jenjang->nama}}" id="enama" placeholder="Masukkan nama jenjang...">
                        </div>
                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </form>
            </div>
        </div>
    </div>
</div>
