<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeatAllocationController;
use App\Http\Controllers\TripController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/seaech-seats', [HomeController::class, 'search'])->name('home.search');
Route::get('/available-seats/{id}', [HomeController::class, 'seats'])->name('home.seats');
Route::post('/seat-booking/{id}', [HomeController::class, 'book'])->name('home.book');
Route::get('/ticket', [HomeController::class, 'ticket'])->name('home.ticket');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('locations', LocationController::class);
Route::resource('trips', TripController::class);
Route::resource('seat-allocations', SeatAllocationController::class);

require __DIR__.'/auth.php';
