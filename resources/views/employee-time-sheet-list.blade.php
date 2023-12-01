@extends('layouts.master')
@push('after-styles')
<style>
    .modal-body{
        max-height: calc(100vh - 200px);
        overflow-y: auto;
    }
</style>
@endpush
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Employee Time Sheet</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="modal employee-detail-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Employee Time Sheet Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
@endsection
@push('after-scripts')
<script>
    $(document).on('click','.view-employee-details',function(){
        var employeeTimeSheetID = $(this).attr('data-value');
        // alert(employeeTimeSheetID);
        var url = "{{ route('admin.employee.timesheet.details', ":id") }}";
        url = url.replace(':id', employeeTimeSheetID);

        $.ajax({
            type: "GET",
            url: url,
            success: function (data) {
                $('.employee-detail-modal').find('.modal-body').html(data);
                $('.employee-detail-modal').modal('show');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
</script>
@endpush