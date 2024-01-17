<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/auth-register', [App\Http\Controllers\RegisterController::class, 'createUser'])->name('auth-register');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('/more-info', [App\Http\Controllers\UserController::class, 'more_info'])->name('more-info');

    Route::get('/documents', [App\Http\Controllers\UserController::class, 'documents'])->name('documents');
    Route::post('/upload-document', [App\Http\Controllers\UserController::class, 'upload_document'])->name('upload-document');

    Route::get('/appointment', [App\Http\Controllers\UserController::class, 'appointment'])->name('appointment');
    Route::get('/payment', [App\Http\Controllers\UserController::class, 'payment'])->name('payment');

    Route::get('/get-in-touch', [App\Http\Controllers\UserController::class, 'contact'])->name('contact');
    Route::post('/submit-contact', [App\Http\Controllers\UserController::class, 'submit_contact'])->name('submit-contact');

    Route::get('/faq', [App\Http\Controllers\UserController::class, 'faq'])->name('faq');
    Route::post('/store', [App\Http\Controllers\PaymentController::class, 'store'])->name('payment-store');
    Route::post('/ach', [App\Http\Controllers\PaymentController::class, 'store_ach'])->name('payment-ach');
    
    Route::get('/success-card-transaction/{amount}/{tran_id}/{email}', [App\Http\Controllers\PaymentController::class, 'success_card'])->name('success-card');
    Route::get('/success-ach-transaction/{amount}/{email}', [App\Http\Controllers\PaymentController::class, 'success_ach'])->name('success-ach');

    Route::get('/pdf-test-store', [App\Http\Controllers\PaymentController::class, 'test_storepdf'])->name('pdf-test-store');
    
    // fq
    Route::get('/fqs', [App\Http\Controllers\FqController::class, 'index'])->name('fqs');
    Route::get('/fq-add', [App\Http\Controllers\FqController::class, 'create'])->name('fq-add');
    Route::post('/fq/store', [App\Http\Controllers\FqController::class, 'store'])->name('fq-store');
    Route::get('/fq/edit/{id}', [App\Http\Controllers\FqController::class, 'edit'])->name('fq-edit');
    Route::post('/fq/update', [App\Http\Controllers\FqController::class, 'update'])->name('fq-update');
    Route::get('/delete-fq/{id}', [App\Http\Controllers\FqController::class, 'destroy']); 

    Route::post('/delete-image-bank', [App\Http\Controllers\FqController::class, 'destroyimagebank'])->name('delete-image-bank');



    // to
    Route::get('/tos', [App\Http\Controllers\ToController::class, 'index'])->name('tos');
    Route::get('/to-add', [App\Http\Controllers\ToController::class, 'create'])->name('to-add');
    Route::post('/to/store', [App\Http\Controllers\ToController::class, 'store'])->name('to-store');
    Route::get('/to/edit/{id}', [App\Http\Controllers\ToController::class, 'edit'])->name('to-edit');
    Route::post('/to/update', [App\Http\Controllers\ToController::class, 'update'])->name('to-update');
    Route::get('/delete-to/{id}', [App\Http\Controllers\ToController::class, 'destroy']); 

    Route::post('/delete-image-to', [App\Http\Controllers\ToController::class, 'destroyimageto'])->name('delete-image-to');
    
    
    
     // Book appointment 

    Route::post('/get-available-slots', [App\Http\Controllers\BookAppointmentController::class, 'get_available_slots'])->name('getavailable-slots');
    Route::post('/book-appointment', [App\Http\Controllers\BookAppointmentController::class, 'book_appointment'])->name('book-appointment');
    
    
     // taxnews
    Route::get('/taxnews', [App\Http\Controllers\TaxnewsController::class, 'index'])->name('taxnews');
    Route::get('/taxnews-details/{id}', [App\Http\Controllers\TaxnewsController::class, 'taxnews_details'])->name('taxnews-details');
});