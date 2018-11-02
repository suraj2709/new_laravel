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

Route::get('/', function () {
    return view('welcome');
});
Route::get('logout','LoginController@logout');
Route::post('login','LoginController@login');
Route::get('addstudent','AdmissionController@addstudent');
Route::get('homepage','LoginController@home');
Route::get('dashboard','LoginController@dashboard');
Route::get('allstudents','AdmissionController@allstudents');
Route::post('updatestudent','AdmissionController@updatestudent');
Route::get('collectfee','FinanceController@collectfee');
Route::get('insertmarks','AcademicsController@insertmarks');
Route::get('updatemarks','AcademicsController@updatemarks');
Route::post('admitstudent','AdmissionController@admitstudent');
Route::post('deactivatestudent','AdmissionController@deactivatestudent');
Route::post('updatetudentbyrollno','AdmissionController@updatetudentbyrollno');
Route::get('searchstudentbyclass','FinanceController@searchstudentbyclass');
