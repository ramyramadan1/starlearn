@extends('Admin.layouts.master') 

@section('content')
<div class="label-field-pair-select-class">
    <label for="student-detail-select-class">Select a batch </label>
    <div class="text-input-bg">
        {!! Form::open(array('url' => 'foo/bar')); !!}
        <select id="course_id" name="course_id" >
            <option value="">Select a batch</option>
            @foreach($batches as $batch)
            <option value="{{ $batch->id }}">{{ $batch->course_name}}</option>
            @endforeach
        </select>
    {!! Form::close(); !!}
    </div>
  </div>

<script type="text/javascript">
$(document).ready(function(){
   $('#course_id').on('change',function(){
       $.ajax({url:'<?php echo url('student/getstudentsonbatch'); ?>',
           type:'POST',data:$(this).closest('form').serialize(),success:function(){
            }    
        }); 
   });    
});
</script>
<table class="table table-bordered table-hover dataTable">
    <thead>  <tr>
                        <th>SL no</th>
                        <th>name</th>
                        <th>Admission No</th>
                        <th></th>
                      </tr>
                    </thead>
    @foreach ($students as $student)
    <tr rol="row">    
        <td>{{ $student->id }}</td>
        <td>{{ $student->first_name }}
        {{ $student->middle_name }}
        {{ $student->last_name }}</td>
        <td>{{ $student->admission_no }}</td>
        <td><a href="/student/profile/{{ $student->id }}">View Profile</a></td>
    <tr>
    @endforeach
</table>
@endsection