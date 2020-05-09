<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/error', function () {
    return view('pages.error');
})->name('error');
Route::resource('hotels', 'HotelController');
Route::resource('reservations', 'ReservationController');
Route::get('/find',['uses' => 'HotelController@find','as' => 'find',]);
Auth::routes();
Route::get('/', 'HomeController@index')->name('/');
Route::get('/create', 'HotelController@create')->name('create');