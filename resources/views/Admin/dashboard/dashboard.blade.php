 
@extends('Admin.layouts.master')
@section('content')

<div class="row">


    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <img src="{{ asset('admin/img/student.png') }}" class="img-responsive" alt="Cinque Terre">

            <a href="#">
                <div class="panel-footer">

                    <div class="clearfix"><b><center>Student Admission</center></b></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <img src="{{ asset('admin/img/admin.png') }}" class="img-responsive" alt="Cinque Terre">

            <a href="">
                <div class="panel-footer">

                    <div class="clearfix"><b><center>Employee Admission</center></b></div>
                </div>
            </a>
        </div>
    </div>




</div>


@endsection
