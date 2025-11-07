<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostcardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/postcard', [PostcardController::class, 'index'])->name('postcard.index');
Route::get('/postcard/create', [PostcardController::class, 'create'])->name('postcard.create');
Route::get('/postcard/{postcard}', [PostcardController::class, 'show'])->name('postcard.show');
Route::post('/postcard', [PostcardController::class, 'store'])->name('postcard.store');
Route::delete('/postcard/{postcard}', [PostcardController::class, 'destroy'])->name('postcard.destroy');