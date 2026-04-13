<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Manager\DashboardController;
use App\Http\Controllers\Manager\BookingController as ManagerBookingController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\FoodBillController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Manager\GalleryController;


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


Route::middleware(['auth'])->group(function () {
    Route::get('/bill/{id}', [BillController::class, 'show'])->name('bill.show');
    Route::get('/bill/{id}/pdf', [BillController::class, 'downloadPDF'])->name('bill.pdf');
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

Route::get('/privacy-policy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/terms-conditions', function () {
    return view('terms');
})->name('terms');

Route::get('/refund-policy', function () {
    return view('refund');
})->name('refund');

Route::post('/food-bill-store', [FoodBillController::class, 'store'])->name('food.bill.store');



Route::get('/manager/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::post('/manager/gallery', [GalleryController::class, 'store'])->name('gallery.store');
Route::delete('/manager/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.delete');

Route::get('/manager/dashboard', [DashboardController::class, 'index'])->name('manager.dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/gallery/sort', [GalleryController::class, 'sort'])->name('gallery.sort');

Route::get('/invoice/{id}', [BookingController::class, 'generateInvoice'])->name('invoice.generate');

Route::get('/booked-dates/{roomType}', [BookingController::class, 'getBookedDates']);
