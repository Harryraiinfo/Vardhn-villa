<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Manager\BookingController as ManagerBookingController;
use App\Http\Controllers\Manager\DashboardController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->prefix('manager')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('manager.dashboard');

    Route::get('/bookings', [ManagerBookingController::class, 'index'])->name('manager.bookings');

    Route::get('/booking/{id}/{status}', [ManagerBookingController::class, 'updateStatus'])
        ->name('manager.booking.status');

    Route::post('/booking/{id}/price', [ManagerBookingController::class, 'updatePrice'])
        ->name('manager.booking.price');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])
        ->name('admin.dashboard');
});

// Room Selection by manager 
Route::prefix('manager')->name('manager.')->group(function () {
    // Other manager routes...

    // Route to update room number
    Route::post('booking/{booking}/update-room', [BookingController::class, 'updateRoom'])
        ->name('booking.updateRoom');
});



Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

Route::get('/', function () {
    return view('home'); // your home Blade file
})->name('home');

Route::get('/about', function () {
    return view('Inner-pages.about');
})->name('about');

Route::get('/rooms', function () {
    return view('Inner-pages.rooms');
})->name('rooms');

Route::get('/food', function () {
    return view('Inner-pages.food');
})->name('food');

Route::get('/facilities', function () {
    return view('Inner-pages.facilities');
})->name('facilities');

Route::get('/attractions', function () {
    return view('Inner-pages.attractions');
})->name('attractions');

Route::get('/contact', function () {
    return view('Inner-pages.contact');
})->name('contact');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/admin', function () {
    return view('Admin.admin');
});
