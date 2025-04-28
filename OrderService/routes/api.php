<?php

use Illuminate\Support\Facades\Route;
use App\Models\Orders;

Route::get('/orders/{id}', function ($id) {
    return response()->json(Orders::findOrFail($id));
});