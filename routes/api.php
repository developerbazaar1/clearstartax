<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware(['auth:sanctum'])->group(function () {

//     Route::post('/auth/logout', 'App\Http\Controllers\Api\AuthController@logout');
//     Route::get('/dashboard', 'App\Http\Controllers\Api\HomeController@dashboard');
    
//     Route::get('/get-faqs', 'App\Http\Controllers\Api\HomeController@get_faqs');
//     Route::post('/get-in-touch', 'App\Http\Controllers\Api\HomeController@get_in_touch');

//     Route::get('/payment', 'App\Http\Controllers\Api\PaymentController@payment');
//     Route::post('/card-payment-store', 'App\Http\Controllers\Api\PaymentController@card_payment_store');
//     Route::post('/ach-payment-store', 'App\Http\Controllers\Api\PaymentController@ach_payment_store');
    
// });


// Route::post('/auth/register', 'App\Http\Controllers\Api\AuthController@createUser');

// Route::post('/auth/login', 'App\Http\Controllers\Api\AuthController@loginUser');

// Route::post('/auth/forgot-password', 'App\Http\Controllers\Api\ForgotPasswordController@sendResetLinkEmail');

// // Route::post('/auth/forgot-password', 'App\Http\Controllers\Api\PasswordController@forgotPassword');

// Route::post('/auth/reset-password', 'App\Http\Controllers\Api\PasswordController@resetPassword');

// Route::get('/get-status', 'App\Http\Controllers\Api\HomeController@get_status');


Route::middleware(['auth:sanctum'])->group(function () {

    Route::post('/auth/logout', 'App\Http\Controllers\Api\AuthController@logout');
    Route::get('/dashboard', 'App\Http\Controllers\Api\HomeController@dashboard');
    
    Route::get('/get-faqs', 'App\Http\Controllers\Api\HomeController@get_faqs');
    Route::post('/get-in-touch', 'App\Http\Controllers\Api\HomeController@get_in_touch');

    Route::get('/payment', 'App\Http\Controllers\Api\PaymentController@payment');
    Route::post('/card-payment-store', 'App\Http\Controllers\Api\PaymentController@card_payment_store');
    Route::post('/ach-payment-store', 'App\Http\Controllers\Api\PaymentController@ach_payment_store');
    
    Route::get('/get-user', 'App\Http\Controllers\Api\HomeController@get_user');
    Route::post('/get-available-slots', 'App\Http\Controllers\Api\HomeController@get_available_slots');
    
    
});


Route::post('/auth/register', 'App\Http\Controllers\Api\AuthController@createUser');

Route::post('/auth/login', 'App\Http\Controllers\Api\AuthController@loginUser');
Route::post('/auth/forgot-password', 'App\Http\Controllers\Api\ForgotPasswordController@sendResetLinkEmail');
// Route::post('/auth/forgot-password', 'App\Http\Controllers\Api\PasswordController@forgotPassword');

Route::post('/auth/reset-password', 'App\Http\Controllers\Api\PasswordController@resetPassword');

Route::get('/get-status', 'App\Http\Controllers\Api\HomeController@get_status');





