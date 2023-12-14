<div class="modal fade" id="editData{{$activity->id}}" tabindex="-1" aria-labelledby="modalEdit{{$activity->id}}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEdit{{$activity->id}}">Ubah Data Referensi Kegiatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="{{route('referensi-kegiatan.destroy', ['referensi_kegiatan' => $activity->id])}}">
                    @csrf
                    @method('put')
                    <div class="row g-3">
                        <input type="hidden" name="activity_id" value="{{$activity->id}}">
                        <div class="col-lg-12">
                            <label for="enama" class="form-label">Nama Kegiatan</label>
                            <input type="text" class="form-control" name="enama" value="{{$activity->nama}}" id="enama" placeholder="Masukkan nama kegiatan...">
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
