<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;

Route::get('/', [ContactController::class, 'index']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::prefix('contact')->group(function () {
    Route::get('/login', [ContactController::class, 'login']);
    Route::get('/register', [ContactController::class, 'register']);
    Route::post('/admin', [BookController::class, 'admin']);
});

Route::get('/', [CategoryController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});
