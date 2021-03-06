<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/health-care', function () {
    return view('dashboard.health-care.home');
});

Route::get('/hmo', function () {
    return view('dashboard.hmo.home');
});

Route::get('/health-ministry', function () {
    return view('dashboard.health-care.home');
});

Route::get('/scheme', function () {
    return view('dashboard.scheme.home');
});

Route::get('/health-ministry/patients', function () {
    return view('dashboard.health-care.patients.view_patient_details');
});

Route::get('/health-ministry/staff', function () {
    return view('dashboard.health-care.staff.view_staff_details');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
