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
Route::post('/store', 'Payment@store')->name('payment-store');
Route::post('/ach', 'Payment@store_ach')->name('payment-ach');
Route::get('/pay/{id}', 'Payment@index')->name('payment');

Route::get('/success-card-transaction/{amount}/{tran_id}/{email}', 'Payment@success_card')->name('success-card');
Route::get('/success-ach-transaction/{amount}/{email}', 'Payment@success_ach')->name('success-ach');

// Route::get('/create/pdf', [PDFController::class, 'createPDF'])->name('createPDF');
Route::get('/create/pdf/christian', 'Payment@createPDF')->name('createPDF');