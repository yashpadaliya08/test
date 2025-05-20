<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\Client\CarBrowseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Client\BookingController as ClientBookingController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\MessageController;

// =======================
// 🌐 Client Side Routes
// =======================

Route::view('/', 'client.home')->name('home');

Route::get('/browse', [CarBrowseController::class, 'index'])->name('browse');
Route::get('/car/{id}', [CarBrowseController::class, 'show'])->name('car.details');
Route::get('/book', [CarBrowseController::class, 'book'])->name('book');
Route::get('/my_bookings', [ClientBookingController::class, 'index'])->name('mybookings');
// Route::get('/{id}', [ClientBookingController::class, 'show'])->name('show');
Route::view('/about', 'client.about')->name('about');
Route::view('/contact', 'client.contact')->name('contact');
Route::post('/book', [ClientBookingController::class, 'store'])->name('booking.store');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// =======================
// 🛠 Admin Routes
// =======================

Route::prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');

    //message
    
    Route::get('/messages', [MessageController::class, 'index'])->name('messages');
    

    // Cars (Resource Controller)
    Route::resource('cars', CarController::class);

    // Bookings
    Route::prefix('bookings')->name('bookings.')->group(function () {
        Route::view('/', 'admin.bookings.index')->name('index');
         Route::get('/', [AdminBookingController::class, 'index'])->name('index');
        Route::get('/{id}', [AdminBookingController::class, 'show'])->name('show');
    });

    // Static Admin Pages
    Route::view('/users', 'admin.users')->name('users');
    // Route::view('/messages', 'admin.messages')->name('messages');
    Route::view('/reports', 'admin.reports')->name('reports');
    Route::view('/settings', 'admin.settings')->name('settings');
});
