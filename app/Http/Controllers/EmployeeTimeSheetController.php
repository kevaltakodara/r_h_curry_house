<?php

namespace App\Http\Controllers;

use App\Models\EmployeeTimeSheet;
use App\Models\EmployeeTimeSheetDetail;
use Illuminate\Http\Request;

class EmployeeTimeSheetController extends Controller
{
    public function index(){
        $employee_timesheet = EmployeeTimeSheet::with('details')->get();
        return view('admin.employee.index', compact('employee_timesheet'));
    }

    public function details($employee_time_sheet_id){
        $id = $employee_time_sheet_id;
        $details = EmployeeTimeSheetDetail::where('employee_time_sheet_id', $id)->get();
        
        return view('admin.employee.details', compact('details'))->render();
    }
}
