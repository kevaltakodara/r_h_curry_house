<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>R & H Curry House</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:200,300,400,400i,500,600,700,800,900%7CSatisfy&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

        <!-- plugin scripts -->
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/css/animate.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/css/swiper.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/css/tripo-icons.css">
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/css/vegas.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/css/nouislider.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/css/nouislider.pips.css">
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/css/skysphere-style.css">

        <!-- phone number flage styles -->
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/build/css/intlTelInput.css" />
        
        <!-- template styles -->
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/css/style.css">
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/css/responsive.css">

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

        <style>
            .error {
                color: red;
            }
        </style>
    </head>
    <body class="t-body" style="margin:0;">
        <div class="page-wrapper">
            <section class="requestpackages pt-50 pb-50">
                <div class="container">
                    @if ( Session::has('success') )
                        <div class="alert alert-success" id="popup_notification">
                            {{ Session::get('success') }}
                        </div>      
                    @endif
                    @if ( Session::has('error') )
                        <div class="alert alert-error" id="popup_notification">
                            {{ Session::get('error') }}
                        </div>      
                    @endif
                    <div class="block-title text-center">
                        <h2>Time Sheet</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <form action="{{ route('frontend.store.details') }}" method="POST" id="employee-timesheet-form" class="contact-one__form" autocomplete="off">
                                @csrf
                                <div class="tour-details__review-form border-r-25 mb-25">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group row mb-0">
                                                <div class="input-group">
                                                    <label class="col-sm-12 col-form-label">Employer's Name</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="employer_name" placeholder="Enter Employer's Name">
                                                    </div><!-- /.input-group -->
                                            </div><!-- /.col-md-6 -->
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mb-0">
                                                <div class="input-group">
                                                    <label class="col-sm-12 col-form-label">Employee's Name</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="employee_name" placeholder="Enter Employee's Name">
                                                    </div><!-- /.input-group -->
                                            </div><!-- /.col-md-6 -->
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mb-0">
                                                <div class="input-group">
                                                    <label class="col-sm-12 col-form-label">Pay Period From</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="pay_period_from" data-provide="datepicker" placeholder="Ex: 13/11/2023">
                                                    </div><!-- /.input-group -->
                                            </div><!-- /.col-md-6 -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group row mb-0">
                                                <div class="input-group">
                                                    <label class="col-sm-12 col-form-label">Pay Period To</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="pay_period_to" data-provide="datepicker" placeholder="Ex: 19/11/2023">
                                                    </div><!-- /.input-group -->
                                            </div><!-- /.col-md-6 -->
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mb-0">
                                                <div class="input-group">
                                                    <label class="col-sm-12 col-form-label">Pay date</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="pay_date" data-provide="datepicker" placeholder="Pay date">
                                                    </div><!-- /.input-group -->
                                            </div><!-- /.col-md-6 -->
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.row low-gutters -->

                                <div class="tour-details__review-form border-r-25 mb-25 employee-timesheet-details">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-header">
                                                <h4>Employee's ordinary Hours and Minuts per week/ fortnight/ other</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group row mb-0">
                                                <div class="input-group">
                                                    <label class="col-sm-12 col-form-label">Day</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="day[]">
                                                        {{-- <select id="inputState" name="day[]" class="form-control">
                                                            <option value="">Choose Day</option>
                                                            <option value="Monday">Monday</option>
                                                            <option value="Thesday">Thesday</option>
                                                            <option value="Wednesday">Wednesday</option>
                                                            <option value="Thrusday">Thrusday</option>
                                                            <option value="Friday">Friday</option>
                                                            <option value="Saturday">Saturday</option>
                                                            <option value="Sunday">Sunday</option>
                                                        </select> --}}
                                                    </div><!-- /.input-group -->
                                            </div><!-- /.col-md-6 -->
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mb-0">
                                                <div class="input-group">
                                                    <label class="col-sm-12 col-form-label">Date</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="date[]" data-provide="datepicker" placeholder="Ex: 19/11/2023">
                                                    </div><!-- /.input-group -->
                                            </div><!-- /.col-md-6 -->
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mb-0">
                                                <div class="input-group">
                                                    <label class="col-sm-12 col-form-label">Start Time</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="timepicker" name="start_time[]" placeholder="Ex: 8:30am">
                                                    </div><!-- /.input-group -->
                                            </div><!-- /.col-md-6 -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group row mb-0">
                                                <div class="input-group">
                                                    <label class="col-sm-12 col-form-label">Start Time of unpaid break</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="timepicker" name="start_time_of_unpaid_break[]" placeholder="Ex: 12:30pm">
                                                    </div><!-- /.input-group -->
                                            </div><!-- /.col-md-6 -->
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mb-0">
                                                <div class="input-group">
                                                    <label class="col-sm-12 col-form-label">Restart time</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="timepicker" name="restart_time[]" placeholder="Ex: 1:30pm">
                                                    </div><!-- /.input-group -->
                                            </div><!-- /.col-md-6 -->
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mb-0">
                                                <div class="input-group">
                                                    <label class="col-sm-12 col-form-label">Finish Time</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="timepicker" name="finish_time[]" placeholder="Ex: 5:00pm">
                                                    </div><!-- /.input-group -->
                                            </div><!-- /.col-md-6 -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group row mb-0">
                                                <div class="input-group">
                                                    <label class="col-sm-12 col-form-label">Other times of unpaid break</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="timepicker" name="other_time_of_unpaid_break[]" placeholder="Ex: 12:30pm">
                                                    </div><!-- /.input-group -->
                                            </div><!-- /.col-md-6 -->
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mb-0">
                                                <div class="input-group">
                                                    <label class="col-sm-12 col-form-label">Total break time</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="timepicker" name="total_break_time[]" placeholder="Ex: 2:30">
                                                    </div><!-- /.input-group -->
                                            </div><!-- /.col-md-6 -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overtime-leave-section">
                                        <div class="row mt-25">
                                            <div class="col-md-12">
                                                <div class="input-group justify-content-left">
                                                    <button type="button" class="thm-btn fill-btn black overtime-btn mr-10">Overtime</button>
                                                    <button type="button" class="thm-btn fill-btn black leave-btn">Leave</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="overtime-block" style="display: none;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="table-header mt-50">
                                                        <h4>Overtime</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group row mb-0">
                                                        <div class="input-group">
                                                            <label class="col-sm-12 col-form-label">Start Time</label>
                                                            <div class="col-md-12">
                                                                <input type="text" class="timepicker" name="overtime_start_time[]" placeholder="Ex: 8:30am">
                                                            </div><!-- /.input-group -->
                                                    </div><!-- /.col-md-6 -->
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group row mb-0">
                                                        <div class="input-group">
                                                            <label class="col-sm-12 col-form-label">Start Time of unpaid break</label>
                                                            <div class="col-md-12">
                                                                <input type="text" class="timepicker" name="overtime_start_time_of_unpaid_break[]" placeholder="Ex: 12:30pm">
                                                            </div><!-- /.input-group -->
                                                    </div><!-- /.col-md-6 -->
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group row mb-0">
                                                        <div class="input-group">
                                                            <label class="col-sm-12 col-form-label">Restart time</label>
                                                            <div class="col-md-12">
                                                                <input type="text" class="timepicker" name="overtime_restart_time[]" placeholder="Ex: 1:30pm">
                                                            </div><!-- /.input-group -->
                                                    </div><!-- /.col-md-6 -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group row mb-0">
                                                        <div class="input-group">
                                                            <label class="col-sm-12 col-form-label">Finish Time</label>
                                                            <div class="col-md-12">
                                                                <input type="text" class="timepicker" name="overtime_finish_time[]" placeholder="Ex: 5:00pm">
                                                            </div><!-- /.input-group -->
                                                    </div><!-- /.col-md-6 -->
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group row mb-0">
                                                        <div class="input-group">
                                                            <label class="col-sm-12 col-form-label">Total break time</label>
                                                            <div class="col-md-12">
                                                                <input type="text" class="timepicker" name="overtime_total_break_time[]" placeholder="Ex: 2:30pm">
                                                            </div><!-- /.input-group -->
                                                    </div><!-- /.col-md-6 -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="leave-block" style="display: none;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="table-header mt-50">
                                                        <h4>Leave</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group row mb-0">
                                                        <div class="input-group">
                                                            <label class="col-sm-12 col-form-label">Type</label>
                                                            <div class="col-md-12">
                                                                <input type="text" name="leave_type[]" placeholder="Ex: Personal Leave, Etc">
                                                            </div><!-- /.input-group -->
                                                    </div><!-- /.col-md-6 -->
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group row mb-0">
                                                        <div class="input-group">
                                                            <label class="col-sm-12 col-form-label">Hours Minutes unpaid break</label>
                                                            <div class="col-md-12">
                                                                <input type="text" name="leave_hours_minute_unpaid_break[]" placeholder="Hours minutes unpaid break">
                                                            </div><!-- /.input-group -->
                                                    </div><!-- /.col-md-6 -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row remove-day-div d-none">
                                        <div class="col-md-12 mt-50">
                                            <div class="input-group justify-content-center">
                                                <button type="button" class="thm-btn fill-btn black remove-day">Remove Day</button>
                                            </div>
                                        </div>
                                    </div>  
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group justify-content-center">
                                            <button type="button" class="thm-btn fill-btn black add-one-more-day">Add One more Day</button>
                                        </div>
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="input-group justify-content-center">
                                            <button type="submit" class="thm-btn fill-btn black">Submit Your Timesheet</button>
                                    </div><!-- /.col-md-6 -->
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- /.page-wrapper -->
        <script src="{{ url('/') }}/public/assets/js/jquery.min.js"></script>
        <script src="{{ url('/') }}/public/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('/') }}/public/assets/js/owl.carousel.min.js"></script>
        <script src="{{ url('/') }}/public/assets/js/waypoints.min.js"></script>
        <script src="{{ url('/') }}/public/assets/js/jquery.counterup.min.js"></script>
        <script src="{{ url('/') }}/public/assets/js/TweenMax.min.js"></script>
        <script src="{{ url('/') }}/public/assets/js/wow.js"></script>
        <script src="{{ url('/') }}/public/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="{{ url('/') }}/public/assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="{{ url('/') }}/public/assets/js/swiper.min.js"></script>
        <script src="{{ url('/') }}/public/assets/js/typed-2.0.11.js"></script>
        <script src="{{ url('/') }}/public/assets/js/vegas.min.js"></script>
        <script src="{{ url('/') }}/public/assets/js/jquery.validate.min.js"></script>
        <script src="{{ url('/') }}/public/assets/js/bootstrap-select.min.js"></script>
        <script src="{{ url('/') }}/public/assets/js/countdown.min.js"></script>
        <script src="{{ url('/') }}/public/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="{{ url('/') }}/public/assets/js/bootstrap-datepicker.min.js"></script>
        <script src="{{ url('/') }}/public/assets/js/nouislider.min.js"></script>
        <script src="{{ url('/') }}/public/assets/js/isotope.js"></script>
        <!-- template scripts -->
        <script src="{{ url('/') }}/public/assets/js/theme.js"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

        <script>
            $(document).ready(function() {
                $(document).on('click','.remove-day',function(){
                    $(this).closest('.employee-timesheet-details').remove();
                });

                $(document).on('click','.add-one-more-day',function(){
                    var cloneBox = $(document).find('#employee-timesheet-form .employee-timesheet-details:first').clone();
                    $(cloneBox).find("input:text").val("");
                    $(cloneBox).find("label.error").remove();
                    $(cloneBox).find(".remove-day-div").removeClass('d-none');

                    $(cloneBox).insertAfter('#employee-timesheet-form .employee-timesheet-details:last');
                });
                
                $("#employee-timesheet-form").validate({
                    ignores: '[]',
                    rules: {
                        "employer_name" : "required",
                        "employee_name" : "required",
                        "pay_period_from" : "required",
                        "pay_period_to" : "required",
                        "pay_date" : "required",
                        "day[]" : "required",
                        "date[]" : "required",
                        "start_time[]" : "required",
                        "start_time_of_unpaid_break[]" : "required",
                        "restart_time[]" : "required",
                        "finish_time[]" : "required",
                        "other_time_of_unpaid_break[]" : "required",
                        "total_break_time[]" : "required",
                        // "overtime_start_time[]" : "required",
                        // "overtime_start_time_of_unpaid_break[]" : "required",
                        // "overtime_restart_time[]" : "required",
                        // "overtime_finish_time[]" : "required",
                        // "overtime_total_break_time[]" : "required",
                        // "leave_type[]" : "required",
                        // "leave_hours_minute_unpaid_break[]" : "required",
                    }
                });

                $(document).on('click','.overtime-btn',function(){
                    $(this).closest('.overtime-leave-section').find('.overtime-block').toggle('slow');
                });

                $(document).on('click','.leave-btn',function(){
                    $(this).closest('.overtime-leave-section').find('.leave-block').toggle('slow');
                });
            });
        </script>
    </body>
</html>