<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'login_form'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');

