<div class="modal fade" id="editData{{$jalur->id}}" tabindex="-1" aria-labelledby="modalEdit{{$jalur->id}}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEdit{{$jalur->id}}">Ubah Data Jalur Penerimaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="{{route('jalur-penerimaan.destroy', ['jalur_penerimaan' => $jalur->id])}}">
                    @csrf
                    @method('put')
                    <div class="row g-3">
                        <input type="hidden" name="jalur_id" value="{{$jalur->id}}">
                        <div class="col-lg-12">
                            <label for="enama" class="form-label">Nama Jalur</label>
                            <input type="text" class="form-control" name="enama" value="{{$jalur->nama}}" id="enama" placeholder="Masukkan nama jalur...">
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
