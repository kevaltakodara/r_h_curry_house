<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
                        </tr>
                    @empty
                    @endforelse
                @endif
            @empty
            @endforelse
        </tbody>
    </table>
</body>
</html>