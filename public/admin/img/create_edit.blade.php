@extends('Admin.layouts.master') 

@section('content')

<div class="page-header">
    <h3>
        <div class="pull-right">
            <a href="#" class="btn btn-sm  btn-primary iframe">
                <span class="glyphicon glyphicon-plus-sign"></span> 
                New</a>
        </div>
    </h3>
</div>
<br>

<table id="table" class="table table-condensed">
    <thead>
        <tr>
            <th>id</th>
            <th>Firstname</th>
            <th>SecondName</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>


@stop {{-- Scripts --}} @section('scripts')
<!-- 
<script type="text/javascript">
$(function() {
      $('#table').DataTable({
              processing: true,
              serverSide: true,
              ajax: '/admin/students/data',
              columns: [
                      { name: 'id'},
                      {name: 'first_name'},
                      {name: 'middle_name'}
                      
              ]
      });
});
</script>
-->

<script type="text/javascript">
    $(document).ready(function () {
        oTable = $('#table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "/admin/students/data",
            columns: [
                {name: 'id'},
                {name: 'first_name'},
                {name: 'middle_name'}

            ]

        });
    });
</script>
@stop
