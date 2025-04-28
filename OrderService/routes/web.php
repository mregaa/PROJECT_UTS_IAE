<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/orders/{car_id}', [OrderController::class, 'createForm']);
Route::post('/orders', [OrderController::class, 'store']);
