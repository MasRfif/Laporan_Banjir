<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;
USE App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laporbanjir', [LaporBanjirController::class, 'form'])
    ->name('laporbanjir.form');

Route::post('/laporbanjir/kirim', [LaporBanjirController::class, 'kirim'])
    ->name('laporbanjir.kirim');

Route::get('/test', [Controller::class, 'test'])->name('test');