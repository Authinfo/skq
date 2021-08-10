<?php

use App\Http\Controllers\Customer\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\MakeOrder;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('booking', BookingController::class);

Route::get('/customer', MakeOrder::class);
