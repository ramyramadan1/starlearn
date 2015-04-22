<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('dashboard', 'Admin\DashboardController@dashboard');

//users Route
Route::get('users', 'HomeController@users');
Route::post('users', 'HomeController@users');

//Students Route
Route::match(['get', 'post'], 'student','StudentController@index');
Route::match(['get', 'post'], 'student/view_all','StudentController@view_all');
Route::match(['get', 'post'], 'student/profile/{id}','StudentController@profile');
Route::match(['get', 'post'], 'student/getstudentsonbatch','StudentController@get_student_on_batchid');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
