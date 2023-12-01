<table class="table table-striped">
    <thead>
        <tr>
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
        </tr>
    </thead>
    <tbody>
        @forelse($details as $key => $value)
            <tr>
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
            </tr>
        @empty
        @endforelse
    </tbody>
</table>