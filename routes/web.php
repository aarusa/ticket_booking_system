<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Cms\AirlinesController;
use App\Http\Controllers\Cms\FlightScheduleController;
use App\Http\Controllers\Cms\CustomersController;
use App\Http\Controllers\Cms\TicketController;
use App\Http\Controllers\Cms\AdminUsersController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\FlightController;
use App\Http\Controllers\Cms\BookingController;
use App\Models\UserController;
use App\Http\Controllers\Cms\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::post('/search-flights', [FlightController::class, 'searchFlight'])->name('search-flights');

Route::get('/flight-details/{id}', [FlightController::class, 'flightDetails'])->name('flight-details');

Route::get('/checkout/{id}', [FlightController::class, 'checkout'])->name('checkout');

Route::post('/confirm-booking', [FlightController::class, 'bookingConfirm'])->name('confirm-booking');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('cms.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/airlines',  [AirlinesController::class, 'index'])->name('airlines.index');
    Route::get('/airlines/create',  [AirlinesController::class, 'create'])->name('airlines.create');
    Route::post('/airlines/store',  [AirlinesController::class, 'store'])->name('airlines.store');
    Route::get('/airlines/edit/{id}',  [AirlinesController::class, 'edit'])->name('airlines.edit');
    Route::put('/airlines/update/{id}',  [AirlinesController::class, 'update'])->name('airlines.update');
    Route::delete('/airlines/{id}',  [AirlinesController::class, 'destroy'])->name('airlines.destroy');

    Route::get('/schedule',  [FlightScheduleController::class, 'index'])->name('schedule.index');
    Route::get('/schedule/create',  [FlightScheduleController::class, 'create'])->name('schedule.create');
    Route::post('/schedule/store',  [FlightScheduleController::class, 'store'])->name('schedule.store');
    Route::get('/schedule/edit/{id}',  [FlightScheduleController::class, 'edit'])->name('schedule.edit');
    Route::put('/schedule/update/{id}',  [FlightScheduleController::class, 'update'])->name('schedule.update');
    Route::delete('/schedule/{id}',  [FlightScheduleController::class, 'destroy'])->name('schedule.destroy');

    Route::get('/bookings',  [BookingController::class, 'index'])->name('bookings.index');

    Route::get('/users',  [AdminUsersController::class, 'index'])->name('admin.index');
    
});

require __DIR__.'/auth.php';
