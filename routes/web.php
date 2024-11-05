<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::resource('task',TaskController::class);
    Route::get('/home', [HomeController::class, 'index'])->name('home');

});

