<?php

use App\Http\Controllers\BbsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Route::resources([
//    'bbs' => BbsController::class,
//]);

Route::get('/', [BbsController::class, 'index'])
    ->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::get('/{bb}', [BbsController::class, 'show'])
    ->name('show');
