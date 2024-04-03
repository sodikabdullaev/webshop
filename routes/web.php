<?php

use App\Http\Livewire\StoreFront;
use App\Http\Livewire\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', StoreFront::class)->name('home');
Route::get('/product/{product}', Product::class)->name('product');
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
