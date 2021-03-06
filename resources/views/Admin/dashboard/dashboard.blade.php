 
@extends('Admin.layouts.master')
@section('content')

<div class="row">


    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <img src="{{ asset('admin/img/admission.png') }}" class="img-responsive" alt="Cinque Terre">

            <a href="{{URL::to('admin/students')}}">
                <div class="panel-footer">

                    <div class="clearfix"><b><center>Students</center></b></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <img src="{{ asset('admin/img/humman.png') }}" class="img-responsive" alt="Cinque Terre">

            <a href="">
                <div class="panel-footer">

                    <div class="clearfix"><b><center>HR Management</center></b></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <img src="{{ asset('admin/img/fiance.png') }}" class="img-responsive" alt="Cinque Terre">

            <a href="">
                <div class="panel-footer">

                    <div class="clearfix"><b><center>Finance</center></b></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <img src="{{ asset('admin/img/mangenews.png') }}" class="img-responsive" alt="Cinque Terre">

            <a href="">
                <div class="panel-footer">

                    <div class="clearfix"><b><center>News Management</center></b></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <img src="{{ asset('admin/img/timetable.png') }}" class="img-responsive" alt="Cinque Terre">

            <a href="">
                <div class="panel-footer">

                    <div class="clearfix"><b><center>Time Table</center></b></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <img src="{{ asset('admin/img/setting.png') }}" class="img-responsive" alt="Cinque Terre">

            <a href="">
                <div class="panel-footer">

                    <div class="clearfix"><b><center>Settings</center></b></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <img src="{{ asset('admin/img/attendance.png') }}" class="img-responsive" alt="Cinque Terre">

            <a href="">
                <div class="panel-footer">

                    <div class="clearfix"><b><center>Attendance</center></b></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <img src="{{ asset('admin/img/exams.png') }}" class="img-responsive" alt="Cinque Terre">

            <a href="">
                <div class="panel-footer">

                    <div class="clearfix"><b><center>Examinations</center></b></div>
                </div>
            </a>
        </div>
    </div>
  



</div>


@endsection
