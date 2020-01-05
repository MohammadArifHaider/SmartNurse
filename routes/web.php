<?php

/*
|--ss------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('log_out', function(){
    Auth::logout();
    Session::flush();
    return Redirect::to('/');
 });
Route::post('patient_information_upload','PatientController@patient_information_upload');

Route::get('/',"SchedulerController@home");

Route::get('intaker', function () {
    return view('intaker.welcome');
});


Route::get('export', 'ExcelController@export');

Route::post('login','SchedulerController@login');



Route::get('patients_profile', function () {
    return view("intaker.patients_profile");
});


Route::get('nurse_profile', function () {
    return view("intaker.nurse_profile");
});

Route::post('import','ExcelController@import');

Route::post('nurse_file_import','ExcelController@nurse_file_import');


Route::get('scheduler','SchedulerController@main_page');
Route::post('assign_nurse','ExcelController@assign_nurse');

Route::get('patient_list','SchedulerController@show_patient_list');

Route::post('search_nurse','SchedulerController@search_nurse');





Route::get('distance_test','SchedulerController@distance_api_integrate');

Route::post('fetch_calendar_data','SchedulerController@fetch_calendar_data');

Route::post('submit_nurse','SchedulerController@submit_nurse');
Route::post('show_nurse_assign_modal','SchedulerController@show_nurse_assign_modal');

Route::get('admin','AdminController@main_page');



