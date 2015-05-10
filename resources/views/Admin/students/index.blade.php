 
@extends('Admin.layouts.master')
@section('content')

<div class="row">


    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <img src="{{ asset('admin/img/admission.png') }}" class="img-responsive" alt="Cinque Terre">

            <a href="#">
                <div class="panel-footer">

                    <div class="clearfix"><b><center>Students Admission</center></b></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <img src="{{ asset('admin/img/humman.png') }}" class="img-responsive" alt="Cinque Terre">

            <a href="{{URL::to('admin/students/edit')}}">
                <div class="panel-footer">

                    <div class="clearfix"><b><center>Students Search </center></b></div>
                </div>
            </a>
        </div>
    </div>
    


</div>


@endsection
