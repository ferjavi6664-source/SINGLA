<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'inicio']);
Route::get('/reportes', [DashboardController::class, 'reportes']);
Route::get('/usuarios', [DashboardController::class, 'usuarios']);
