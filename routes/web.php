<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('unit', UnitController::class);
});