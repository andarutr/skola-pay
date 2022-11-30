<?php

use Illuminate\Support\Facades\Route;

Route::middleware('isParent')->group(function(){
	// Route
	Route::get('/parent/dashboard', [App\Http\Controllers\Parent\DashboardController::class, 'index']);
	Route::get('/parent/pembayaran', [App\Http\Controllers\Parent\PaymentController::class, 'index']);
	Route::get('/parent/tagihan', [App\Http\Controllers\Parent\InvoiceController::class, 'index']);
});