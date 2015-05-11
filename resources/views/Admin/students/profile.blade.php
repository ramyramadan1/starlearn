@extends('app')

@section('content')
<?php // var_dump($student_details) ?>

<div id="content-header">
  <img src="/images/student_details/student_details_logo.jpg">
  <h1>Student info</h1>
  <h3>Student Profile</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="/images/buttons/back.png?1346836242"></a>
  </div>
</div>

<div id="nav">
  <ul>
    
      <li><a href="/student/reports/5">Reports</a></li>
    

    
      <li><a href="/student/guardians/5">Guardians</a></li>
    
    
      
      
        <li><a href="/student/email/5">Send Email</a></li>
      
    
    
      <li><a href="/student/remove/5">Delete</a></li>
    
    <li>
      <a href="#" class="drops" id="link_one">More ▼</a>
      <ul id="box_one" class="scriptaculously" style="overflow: visible; display: none;">
        
          <li><a href="/student/fees/5">Fees</a></li>
        
        
          
            <li><a href="/library/student_library_details/5">Library</a></li>
          
        
      </ul>
    </li>
  </ul>
</div>

<div id="page-yield">

  

  <div id="student_profile_heading">

    <div id="profile_picture_display">
      
        <img alt="Default_student" src="/images/master_student/profile/default_student.png?1346836242">
      
    </div>

    <div id="student_main_info">
      
      <h3> {{ $s_d->first_name }} {{ $s_d->middle_name }} {{ $s_d->last_name }}</h3>
      
      <h4> Course: {{ $s_d->course_name }}</h4>
      <h4> Batch : {{ $s_d->batch_name }}</h4>
      <h4> Adm no. : {{ $s_d->admission_no }}</h4>
    </div>

    <div class="extender"> </div>

  </div>

  <div id="new_profile_info_top">
    <div class="profile_top_banner">
      <span class="profile">Details</span>
      <img alt="Topbanner" src="/images/master_student/profile/topbanner.png?1346836242"></div>
    
      <table width="700">
        <tbody><tr class="odd left"><td>Admission Date</td><td class="right"><?php echo date('F d,Y',  strtotime($s_d->admission_date));?>  </td></tr>
      <tr class="even left"><td>Date of Birth</td><td class="right">March 22, 1995</td></tr>
      <tr class="odd left"><td>Blood Group</td><td class="right">{{ $s_d->blood_group }}</td></tr>
      <tr class="even left"><td>Gender</td><td class="right">{{ $s_d->gender }}</td></tr>

      <tr class="odd left"><td>Nationality</td><td class="right">{{ $s_d->nationality->name }}</td></tr>
      <tr class="even left"><td>Language</td><td class="right">{{ $s_d->language }}</td></tr>

      <tr class="odd left"><td>Category</td><td class="right"> {{ $s_d->studentCategory->name }}</td></tr>
      <tr class="even left"><td>Religion</td><td class="right">{{ $s_d->religion }}</td></tr>
      <tr class="odd left"><td>Address</td><td class="right">{{ $s_d->address_line1 }} {{ $s_d->address_line2 }}</td></tr>

      <tr class="even left"><td>City</td><td class="right">{{ $s_d->city }}</td></tr>
      <tr class="odd left"><td>State</td><td class="right">{{ $s_d->state }}</td></tr>
      <tr class="even left"><td>PIN code</td><td class="right">{{ $s_d->pin_code }}</td></tr>
      <tr class="odd left"><td>Country</td><td class="right">{{ $s_d->country->name }}</td></tr>
      <tr class="even left"><td>Phone</td><td class="right">{{ $s_d->phone1 }}</td></tr>
      <tr class="odd left"><td>Mobile</td><td class="right">{{ $s_d->phone2 }}</td></tr>
      <tr class="even left"><td>Email</td><td class="right">{{ $s_d->email }}</td></tr>
      
      
        <tr class="even left">
  <td>Library card</td>
  <td class="right">{{ $s_d->library_card }}</td>
    </tr>
        <tr class="odd left"><td>SMS Alerts</td><td class="right">@if($s_d->is_sms_enabled==1) Enabled @else Disabled @endif</td></tr>
      
      <tr class="even left"><td>In case of emergencies, contact :</td><td class="right">
                <span>No guardian added yet(<a href="/student/add_guardian/5">Add Guardian</a>)</span>

          </td></tr>
      
      
        
          <tr class="odd left"><td></td><td class="right">No Previous data (<a href="/student/previous_data/5">Add Previous Data</a>)</td></tr>
        
      
    </tbody></table>
    
      <div class="buttons">
        <a href="/student/edit/5" class="user_button"> ► Edit</a>

        <a href="/student/profile_pdf/5" class="user_button" target="_blank"> ► PDF Report</a>
      </div>
    

  </div>
 
</div>


@endsection