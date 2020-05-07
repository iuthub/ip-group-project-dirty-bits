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

Route::get('/', function () {
    return view('pages.index');
})->name('/');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/create', function () {
    return view('pages.create');
})->name('create');
Route::get('/my-reservations', function () {
    return view('pages.myReservations');
})->name('my-reservations');
Route::get('/reservation-details', function () {
    return view('pages.reservationDetails');
})->name('reservation-details');
Route::get('/error', function () {
    return view('pages.error');
})->name('error');
Route::resource('hotels', 'HotelController');
Route::resource('reservations', 'ReservationController');