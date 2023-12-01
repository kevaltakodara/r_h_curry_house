<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeTimeSheetDetail extends Model
{
    use HasFactory;

    protected $table = 'employee_time_sheet_details';

    protected $fillable = [
        'employee_time_sheet_id',
        'day',
        'date',
        'start_time',
        'start_time_of_unpaid_break',
        'restart_time',
        'finish_time',
        'other_time_of_unpaid_break',
        'total_break_time',
        'overtime_start_time',
        'overtime_start_time_of_unpaid_break',
        'overtime_restart_time',
        'overtime_finish_time',
        'overtime_total_break_time',
        'leave_type',
        'leave_hours_minute_unpaid_break',
    ];
}
