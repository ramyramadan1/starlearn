<?php

Route::group(['middleware' => 'auth'], function() {


    #Admin Dashboard
    Route::get('admin/dashboard', 'Admin\DashboardController@dashboard');

    #Students
    Route::get('admin/students', 'Admin\StudentsController@index');
    Route::get('admin/students/edit', 'Admin\StudentsController@create_edit');
    Route::get('admin/students/data', 'Admin\StudentsController@data');

    Route::get('admin/students/create', 'Admin\StudentsController@getCreate');
    Route::post('admin/students/create', 'Admin\StudentsController@postCreate');
});
