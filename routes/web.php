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
// all public route
Route::get('/', 'PageController@index')->name('home');
Route::get('/divisions/{division}', 'DivisionController@show')->name('division.show');
Route::get('/cities/{city}', 'CityController@show')->name('city.show');
Route::get('/hospitals/{hospital}', 'HospitalController@show')->name('hospital.show');
Route::get('/doctors', 'DoctorController@index')->name('doctor.index');
Route::get('/doctors/{doctor}', 'DoctorController@show')->name('doctor.show');
Route::get('/disciplines', 'DisciplineController@index')->name('discipline.index');
Route::get('/disciplines/{discipline}', 'DisciplineController@show')->name('discipline.show');
Route::get('/search', 'PageController@search')->name('search');

// dashboard
Route::get('/dashboard', [
  'as' => 'dashboard.index',
  'uses' => 'DashboardController@index'
]);



/// automatic auth

Auth::routes();
