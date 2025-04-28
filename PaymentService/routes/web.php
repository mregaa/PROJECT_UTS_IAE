<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('/payment/{order_id}', [PaymentController::class, 'viewPayments'])->name('payment.page');
Route::post('/payment/{order_id}/confirm', [PaymentController::class, 'processPayment'])->name('payment.confirm');
Route::get('/review/{order_id}', [PaymentController::class, 'showReviewPage'])->name('payments.review');
