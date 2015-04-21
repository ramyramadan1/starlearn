@extends('layouts.master')

@section('sidebar')
    <div class="label-field-pair-select-class">
    <label for="student-detail-select-class">Select a batch </label>
    <div class="text-input-bg"><select id="batch_id" name="batch_id" ><option value="">Select a batch</option>
            @foreach($batches as $batch)
            <option value="{{ $batch->id }}">{{ $batch->name}}</option>
            @endforeach
        </select></div>
  </div>

    
@stop

@section('content')

<script type="text/javascript">
$(document).ready(function(){
    
    
});
</script>
<table class="table table-bordered table-hover dataTable">
    <thead>  <tr>
                        <th>SL no</th>
                        <th>name</th>
                        <th>User Name</th>
                        <th></th>
                      </tr>
                    </thead>
    @foreach ($students as $student)
    <tr rol="row">    
        <td>{{ $student->id }}</td>
        <td>{{ $student->first_name }}
        {{ $student->middle_name }}
        {{ $student->last_name }}</td>
        <td>{{ $student->date_of_birth }}</td>
    <tr>
    @endforeach
</table>
@stop