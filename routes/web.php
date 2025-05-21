<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\Client\CarBrowseController;
use App\Http\Controllers\Client\BookingController as ClientBookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| 🔐 Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

/*
|--------------------------------------------------------------------------
| 🌐 Client-Facing Routes
|--------------------------------------------------------------------------
*/
Route::view('/', 'client.home')->name('home');
Route::get('/browse', [CarBrowseController::class, 'index'])->name('browse');
Route::get('/car/{id}', [CarBrowseController::class, 'show'])->name('car.details');
Route::get('/book', [CarBrowseController::class, 'book'])->name('book');
Route::post('/book', [ClientBookingController::class, 'store'])->name('booking.store');

Route::get('/my_bookings', [ClientBookingController::class, 'index'])->middleware('auth')->name('mybookings');

Route::view('/about', 'client.about')->name('about');
Route::view('/contact', 'client.contact')->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/dashboard', function () {
    return view('client.dashboard');
})->middleware('auth')->name('client.dashboard');

/*
|--------------------------------------------------------------------------
| 🛠 Admin Routes (Prefix: admin)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {

    // Admin Dashboard
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');

    // Messages
    Route::get('/messages', [MessageController::class, 'index'])->name('messages');

    // Cars Management
    Route::resource('cars', CarController::class);

    // Booking Management
    Route::prefix('bookings')->name('bookings.')->group(function () {
        Route::get('/', [AdminBookingController::class, 'index'])->name('index');
        Route::get('/{id}', [AdminBookingController::class, 'show'])->name('show');
    });

    // Static Admin Pages
    Route::view('/users', 'admin.users')->name('users');
    Route::view('/reports', 'admin.reports')->name('reports');
    Route::view('/settings', 'admin.settings')->name('settings');
});
