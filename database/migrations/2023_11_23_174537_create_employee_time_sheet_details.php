<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTimeSheetDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_time_sheet_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_time_sheet_id');
            $table->string('day')->nullable();
            $table->date('date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('start_time_of_unpaid_break')->nullable();
            $table->string('restart_time')->nullable();
            $table->string('finish_time')->nullable();
            $table->string('other_time_of_unpaid_break')->nullable();
            $table->string('total_break_time')->nullable();
            $table->string('overtime_start_time')->nullable();
            $table->string('overtime_start_time_of_unpaid_break')->nullable();
            $table->string('overtime_restart_time')->nullable();
            $table->string('overtime_finish_time')->nullable();
            $table->string('overtime_total_break_time')->nullable();
            $table->string('leave_type')->nullable();
            $table->string('leave_hours_minute_unpaid_break')->nullable();
            $table->timestamps();

            // $table->id();
            // $table->string('day');
            // $table->date('date');
            // $table->time('start_time');
            // $table->time('start_time_of_unpaid_break');
            // $table->time('restart_time');
            // $table->time('finish_time');
            // $table->time('other_time_of_unpaid_break');
            // $table->time('total_break_time');
            // $table->time('overtime_start_time');
            // $table->time('overtime_start_time_of_unpaid_break');
            // $table->time('overtime_restart_time');
            // $table->time('overtime_finish_time');
            // $table->time('overtime_total_break_time');
            // $table->string('leave_type');
            // $table->string('leave_hours_minute_unpaid_break');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_time_sheet_details');
    }
}
