<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;;
Route::get('/', [DashboardController::class, 'inicio']);
Route::get('/reportes', [DashboardController::class, 'reportes']);
Route::get('/usuarios', [DashboardController::class, 'usuarios']);
