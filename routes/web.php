<?php

use App\Http\Controllers\EmployeeTimeSheetController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::post('/store', [HomeController::class, 'store'])->name('frontend.store.details');

Route::get('admin/employee/time-sheet', [EmployeeTimeSheetController::class, 'index'])
    ->name('admin.employee.timesheet.list');

Route::get('admin/employee/time-sheet/details/{employee_time_sheet_id}', [EmployeeTimeSheetController::class, 'details'])
    ->name('admin.employee.timesheet.details');
