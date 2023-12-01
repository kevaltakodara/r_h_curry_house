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
            <h3 class="page-header">Employee Time Sheet</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row" style="margin-top: 20px; max-height: 100vh">
        <div class="col-lg-12 table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Employee Name</th>
                        <th>Employer Name</th>
                        <th>Pay Period From</th>
                        <th>Pay Period To</th>
                        <th>Pay Date</th>
                        <th class="text-center" scope="col">Day</th>
                        <th class="text-center" scope="col">Date</th>
                        <th class="text-center" scope="col">Start Time</th>
                        <th class="text-center" scope="col">Start Time of Unpaid Break</th>
                        <th class="text-center" scope="col">Restart Time</th>
                        <th class="text-center" scope="col">Finish Time</th>
                        <th class="text-center" scope="col">Other Time of Unpaid Break</th>
                        <th class="text-center" scope="col">Total Break Time</th>
                        <th class="text-center" scope="col">Overtime Start Time</th>
                        <th class="text-center" scope="col">Overtime Start Time of Unpaid Break</th>
                        <th class="text-center" scope="col">Overtime Restart Time</th>
                        <th class="text-center" scope="col">Overtime Finish Time</th>
                        <th class="text-center" scope="col">Overtime Total Break Time</th>
                        <th class="text-center" scope="col">Leave Type</th>
                        <th class="text-center" scope="col">Leave Hours Minute Unpaid Break</th>
                        <th>Created At</th>
                        {{-- <th>Actions</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @forelse ($employee_timesheet as $key => $row)

                        @if(isset($row->details))

                        @forelse ($row->details as $k => $value)
                            <tr>
                                <td>{{ $row->employee_name }}</td>
                                <td>{{ $row->employer_name }}</td>
                                <td>{{ $row->pay_period_from }}</td>
                                <td>{{ $row->pay_period_to }}</td>
                                <td>{{ $row->pay_date }}</td>
                                <td class="text-center">{{ $value->day ?? ''}} </td>
                                <td class="text-center">{{ $value->date ?? ''}} </td>
                                <td class="text-center">{{ $value->start_time ?? ''}} </td>
                                <td class="text-center">{{ $value->start_time_of_unpaid_break ?? ''}} </td>
                                <td class="text-center">{{ $value->restart_time ?? ''}} </td>
                                <td class="text-center">{{ $value->finish_time ?? ''}} </td>
                                <td class="text-center">{{ $value->other_time_of_unpaid_break ?? ''}} </td>
                                <td class="text-center">{{ $value->total_break_time ?? ''}} </td>
                                <td class="text-center">{{ $value->overtime_start_time ?? ''}} </td>
                                <td class="text-center">{{ $value->overtime_start_time_of_unpaid_break ?? ''}} </td>
                                <td class="text-center">{{ $value->overtime_restart_time ?? ''}} </td>
                                <td class="text-center">{{ $value->overtime_finish_time ?? ''}} </td>
                                <td class="text-center">{{ $value->overtime_total_break_time ?? ''}} </td>
                                <td class="text-center">{{ $value->leave_type ?? ''}} </td>
                                <td class="text-center">{{ $value->leave_hours_minute_unpaid_break ?? ''}} </td>
                                <td>{{ $row->created_at }}</td>
                                {{-- <td>
                                    <button type="button" class="btn btn-primary view-employee-details" data-value="{{ $row->id }}"><i class="far fa-eye"></i></button>
                                </td> --}}
                            </tr>
                        @empty
                        @endforelse
                        @endif
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
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
    $('#example').DataTable();

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