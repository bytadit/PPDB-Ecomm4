<div class="modal fade" id="guestbookReport" tabindex="-1" aria-labelledby="modalReport">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreate">Generate Report Riwayat Kunjungan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="/guestbook">
                    @csrf
                    <div class="row g-3">
                        <label for="getDataBtn" class="form-label">Pilih Tanggal</label>
                        <div class="row g-3 mb-3 mt-0 align-items-center">
                            <div class="col-sm-auto mt-0">
                                <div class="input-group">
                                    <input type="text"
                                           class="form-control border-0 dash-filter-picker shadow"
                                           data-provider="flatpickr" data-range-date="true"
                                           data-date-format="d M, Y"
                                           data-deafult-date="01 Jan 2022 to 31 Jan 2022">
                                    <div
                                        class="input-group-text bg-primary border-primary text-white">
                                        <i class="ri-calendar-2-line"></i>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                    </div>
                    <div class="row g-3">
                        <label for="getDataBtn" class="form-label">Pilih Format</label>
                        <div class="d-flex align-items-center fw-medium mb-3 mt-0">
                            <button type="button" class="btn btn-md btn-soft-success mr-1" id="get_xlsx">
                                <i class="ri-file-excel-2-line"></i> <span >@lang('.XLSX')</span>
                            </button>
{{--                            <button type="button" class="btn btn-md btn-soft-primary mx-1" id="get_csv">--}}
{{--                                <i class="ri-database-2-line"></i> <span >@lang('.CSV')</span>--}}
{{--                            </button>--}}
                            <button type="button" class="btn btn-md btn-soft-danger mx-1" id="get_pdf">
                                <i class="ri-file-pdf-line"></i> <span >@lang('.PDF')</span>
                            </button>
                            <button type="button" class="btn btn-md btn-soft-info mx-1" id="get_word">
                                <i class="ri-file-word-line"></i> <span >@lang('.WORD')</span>
                            </button>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" id="submit-btn" value="false">Generate</button>
                            </div>
                        </div><!--end col-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $("#add-new").on("click", function(){
        $("#chosen_btn").val('new-data');

        $('#db-data').removeClass('d-block');
        $('#db-data').addClass('d-none');
        $('#db-search').removeClass('btn-primary');
        $('#db-search').addClass('btn-soft-primary');

        $('#new-data').removeClass('d-none');
        $('#add-new').removeClass('btn-soft-success');
        $('#add-new').addClass('btn-success');
        $('#new-data').addClass('d-block');

        $('#detail-data').removeClass('d-none');
        $('#detail-data').addClass('d-block');
    });

    $("#db-search").on("click", function(){
        $("#chosen_btn").val('db-data');

        $('#new-data').removeClass('d-block');
        $('#new-data').addClass('d-none');
        $('#add-new').removeClass('btn-success');
        $('#add-new').addClass('btn-soft-success');

        $('#db-data').removeClass('d-none');
        $('#db-search').removeClass('btn-soft-primary');
        $('#db-search').addClass('btn-primary');
        $('#db-data').addClass('d-block');

        $('#detail-data').removeClass('d-none');
        $('#detail-data').addClass('d-block');
    });
    $("#submit-btn").on("click", function (){
        $("#submit_state").val(true);
    })
</script>
