<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/workers', [WorkerController::class, 'workers'])->name('workers');
    Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact');
    Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');
});

?>