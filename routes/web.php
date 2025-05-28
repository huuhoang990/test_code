<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DroneController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level1', [DroneController::class, 'level1'])->name('level1');

Route::get('/level2', [DroneController::class, 'level2'])->name('level2');

Route::get('/level3', [DroneController::class, 'level3'])->name('level3');

Route::get('/level4', [DroneController::class, 'level4'])->name('level4');

Route::get('/level5', [DroneController::class, 'level4'])->name('level5');
