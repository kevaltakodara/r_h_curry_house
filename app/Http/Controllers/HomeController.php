<?php

namespace App\Http\Controllers;

use App\Mail\EmployeeTimeSheetSendMail;
use App\Models\EmployeeTimeSheet;
use App\Models\EmployeeTimeSheetDetail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request){
        try{
            $data = $request->all();
            $create_employee_time_sheet_arr = [
                'employee_name' => $data['employee_name'],
                'employer_name' => $data['employer_name'] ?? NULL,
                'pay_period_from' => isset($data['pay_period_from']) ? date('Y-m-d', strtotime($data['pay_period_from'])) : NULL,
                'pay_period_to' => isset($data['pay_period_to']) ? date('Y-m-d', strtotime($data['pay_period_to'])) : NULL,
                'pay_date' => isset($data['pay_date']) ? date('Y-m-d', strtotime($data['pay_date'])) : NULL,
            ];
    
            $emp_time_sheet = EmployeeTimeSheet::create($create_employee_time_sheet_arr)->id;
    
            if($emp_time_sheet){
                if(isset($data['day'])){
                    foreach($data['day'] as $key => $value){
                        $tmp = [
                            'employee_time_sheet_id' => $emp_time_sheet,
                            'day' => $value,
                            'date' => isset($data['date'][$key]) ? date('Y-m-d', strtotime($data['date'][$key])) : NULL,
                            'start_time' => $data['start_time'][$key] ?? NULL,
                            'start_time_of_unpaid_break' => $data['start_time_of_unpaid_break'][$key] ?? NULL,
                            'restart_time' => $data['restart_time'][$key] ?? NULL,
                            'finish_time' => $data['finish_time'][$key] ?? NULL,
                            'other_time_of_unpaid_break' => $data['other_time_of_unpaid_break'][$key] ?? NULL,
                            'total_break_time' => $data['total_break_time'][$key] ?? NULL,
                            'overtime_start_time' => $data['overtime_start_time'][$key] ?? NULL,
                            'overtime_start_time_of_unpaid_break' => $data['overtime_start_time_of_unpaid_break'][$key] ?? NULL,
                            'overtime_restart_time' => $data['overtime_restart_time'][$key] ?? NULL,
                            'overtime_finish_time' => $data['overtime_finish_time'][$key] ?? NULL,
                            'overtime_total_break_time' => $data['overtime_total_break_time'][$key] ?? NULL,
                            'leave_type' => $data['leave_type'][$key] ?? NULL,
                            'leave_hours_minute_unpaid_break' => $data['leave_hours_minute_unpaid_break'][$key] ?? NULL,
                        ];
                        EmployeeTimeSheetDetail::create($tmp);
                    }
                }
            }

            if(isset($emp_time_sheet)){
                Mail::send(new EmployeeTimeSheetSendMail($emp_time_sheet));
            }
            

            Session::flash('success', 'Data saved successfully.');
            return redirect()->route('frontend.index');
        }catch (Exception $e){
            Log::info('Error => '. $e);
            Session::flash('error', 'Something went wrong try again.');
            return redirect()->back();
        }

    }
}
