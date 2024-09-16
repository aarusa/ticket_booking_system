<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Cms\AirlinesController;
use App\Http\Controllers\Cms\FlightScheduleController;
use App\Http\Controllers\Cms\CustomersController;
use App\Http\Controllers\Cms\TicketController;
use App\Http\Controllers\Cms\AdminUsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.index');
});

Route::get('/dashboard', function () {
    return view('cms.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/airlines',  [AirlinesController::class, 'index'])->name('airlines.index');

    Route::get('/flight-schedule',  [FlightScheduleController::class, 'index'])->name('schedule.index');

    Route::get('/customers',  [CustomersController::class, 'index'])->name('customers.index');

    Route::get('/ticket',  [TicketController::class, 'index'])->name('ticket.index');

    Route::get('/admin-users',  [AdminUsersController::class, 'index'])->name('admin.index');
});

require __DIR__.'/auth.php';
