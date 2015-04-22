@extends('layouts.master')

@section('sidebar')
   
@stop

@section('content')
<div id="page-yield">
  <div id="search_box_bg">
    <form name="search_form" action="" style="display:inline;">
      <input id="option" name="option" type="hidden" value="active">
      <label for="user_name">Search
        <img align="absmiddle" alt="Loader" border="0" id="loader" src="/images/loader.gif?1346836242" style="display: none;">
      </label>
      <div id="search_textbox">
        <input autocomplete="off" id="query" name="query" type="text">

      </div>
      <div class="radio_button">
        <input type="radio" name="setopt" id="search_present_students_radio" checked="checked" onclick="setOption('active')">Present students
        <input type="radio" name="setopt" id="search_former_students_radio" onclick="setOption('former')">Former students
      </div>
      <div class="extender"></div>
    </form>
  </div>
  

  <div id="view_all">

  </div>

  <div id="information"></div>

</div>
@stop