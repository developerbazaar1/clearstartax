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


Route::get('/', 'Payment@login')->name('login');
Route::get('/{id}', 'Payment@caseid_login')->name('caseid-login');
Route::post('/login', 'Payment@login_check')->name('login-check');
Route::get('/404', 'Payment@fof')->name('404');

Route::get('/appointment/{id}', 'Payment@appointment')->name('appointment');
Route::post('/get-available-slots', 'Payment@get_available_slots')->name('getavailable-slots');
Route::post('/book-appointment', 'Payment@book_appointment')->name('book-appointment');
