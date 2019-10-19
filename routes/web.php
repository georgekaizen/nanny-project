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
Route::view('/', 'home');
Route::get('/employees', 'EmployeeController@index')->name('employees');

Route::group(['prefix' => 'dashboard','middleware' =>'auth'], function() {
    Route::view('/', 'dashboard/dashboard');
    Route::get('reservations/create/{id}', 'ReservationController@create');
    Route::resource('reservations', 'ReservationController')->except('create');
    Route::get('employee_registration', 'EmployeeController@registration')->name('employee_registration');
    Route::post('register_employee', 'EmployeeController@store')->name('register_employee');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
