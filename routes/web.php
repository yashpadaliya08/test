<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\Client\CarBrowseController;
use App\Http\Controllers\Client\BookingController as ClientBookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminAuthController; // Your combined Admin auth controller

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Public routes
Route::view('/', 'client.home')->name('home');
Route::view('/about', 'client.about')->name('about');
Route::view('/contact', 'client.contact')->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Client authenticated routes (users logged in and verified)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'client.dashboard')->name('dashboard');

    // Car browsing & booking
    Route::get('/browse', [CarBrowseController::class, 'index'])->name('browse');
    Route::get('/car/{id}', [CarBrowseController::class, 'show'])->name('car.details');
    Route::get('/book', [CarBrowseController::class, 'book'])->name('book');
    Route::post('/book', [ClientBookingController::class, 'store'])->name('booking.store');
    Route::get('/my_bookings', [ClientBookingController::class, 'index'])->name('my_bookings');

    // Profile management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes: Guest access (login and register)
Route::prefix('admin')->name('admin.')->middleware('guest')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showAuthForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/register', [AdminAuthController::class, 'register']);
});

// Admin routes: Authenticated admins only
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::get('/messages', [MessageController::class, 'index'])->name('messages');
    Route::resource('cars', CarController::class);

    Route::prefix('bookings')->name('bookings.')->group(function () {
        Route::get('/', [AdminBookingController::class, 'index'])->name('index');
        Route::get('/{id}', [AdminBookingController::class, 'show'])->name('show');
    });

    Route::view('/users', 'admin.users')->name('users');
    Route::view('/reports', 'admin.reports')->name('reports');
    Route::view('/settings', 'admin.settings')->name('settings');
});

// Include client auth routes (Laravel Breeze or other)
require __DIR__.'/auth.php';
