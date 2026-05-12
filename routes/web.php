<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('fakultas.create');
// });

Route::resource('fakultas', FakultasController::class);
Route::get('/prodi', [ProdiController::class, 'index']);