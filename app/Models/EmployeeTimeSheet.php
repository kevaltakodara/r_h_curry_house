<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeTimeSheet extends Model
{
    use HasFactory;

    protected $table = 'employee_time_sheet';

    protected $fillable = [
        'employee_name',
        'employer_name',
        'pay_period_from',
        'pay_period_to',
        'pay_date',
    ];

    public function details(){
        return $this->hasMany(EmployeeTimeSheetDetail::class, 'employee_time_sheet_id');
    }
}
