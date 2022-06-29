<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,"index"])->name("homepage");
Route::post('/', [HomeController::class,"store"])->name("store");
Route::get('/delete/{id}', [HomeController::class,"remove"])->name("delete");
