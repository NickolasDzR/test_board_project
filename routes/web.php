<?php

use App\Http\Controllers\BbsController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'board' => BbsController::class,
]);
