<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FashionablyController;

Route::get('/', [FashionablyController::class, 'index']);
Route::get('/confirm', [FashionablyController::class, 'confirm']);
Route::post('/contacts/confirm', [FashionablyController::class, 'confirm']);
Route::post('/contacts', [FashionablyController::class, 'store']);

