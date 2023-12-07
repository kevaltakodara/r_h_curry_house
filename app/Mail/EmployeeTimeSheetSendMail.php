<?php

namespace App\Mail;

use App\Models\EmployeeTimeSheet;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Throwable;

class EmployeeTimeSheetSendMail extends Mailable
{
    use SerializesModels;

    public $emp_time_sheet;
    public $employee_timesheet;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emp_time_sheet)
    {
        $this->emp_time_sheet = $emp_time_sheet;
        $this->subject = "Employee Attendance - Time Sheet";
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $employee_timesheet = EmployeeTimeSheet::with('details')->where('id',$this->emp_time_sheet)->get();
        $this->employee_timesheet = $employee_timesheet;

        return $this->to('kevaltakodara@gmail.com')->view('emails.employee-time-sheet-mail');
    }

    public function failed(Throwable $exception)
    {
        Log::error('['.Carbon::now().'] - sent email - to: - FAILED'  );
        Log::info($exception);
    }
}
