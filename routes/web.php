<?php

use App\Http\Controllers\BbsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Группа для неавторизованных (гости)
Route::middleware('guest')->group(function () {
    // Страница входа
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // Регистрация (если нужна)
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

// Группа для авторизованных
Route::middleware('auth')->group(function () {
    // Личный кабинет пользователя6
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Выход
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/', [BbsController::class, 'index'])
    ->name('index');

Route::get('/create', [BbsController::class, 'create'])
    ->name('create');

Route::post('/store', [BbsController::class, 'store'])
    ->name('store');

Route::get('/edit/{bb}', [BbsController::class, 'edit'])
    ->name('edit');

Route::patch('/update/{bb}', [BbsController::class, 'update'])
    ->name('update');

Route::delete('/delete/{bb}', [BbsController::class, 'destroy'])
    ->name('delete');

Route::get('/{bb}', [BbsController::class, 'show'])
    ->name('show');
