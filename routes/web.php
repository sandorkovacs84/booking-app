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

// List Accommodations 
Route::get('/accommodations', 'AccommodationController@index');

// List rooms 
Route::get('/rooms', 'RoomController@index');


Route::get('/demo', function () {
    return view('demo');
});

Route::resource('bookings', 'BookingController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
