<div class="modal fade" id="createDataRapor" tabindex="-1" aria-labelledby="modalCreateRapor">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreate">Tambah Ketentuan Semester Nilai Rapor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="{{route('rapor.store')}}">
                    @csrf
                    <div class="row g-3">
                        <input type="hidden" name="id_penerimaan" id="id_penerimaan" value="{{$penerimaan->first()->id}}">
                        <div class="col-lg-12 mb-3">
                            <div>
                                <label for="nama_semester" class="form-label">Semester Ke-</label>
                                <input type="number" min="1" class="form-control" name="nama_semester" id="nama_semester" placeholder="Masukkan semester ke-...">
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
