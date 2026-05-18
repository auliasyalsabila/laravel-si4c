<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProdiController::class, 'create']);


Route::resource('fakultas', FakultasController::class);
Route::resource('prodi', ProdiController::class);