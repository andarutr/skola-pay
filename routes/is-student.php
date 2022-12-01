<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','isStudent'])->group(function(){
	// Route
	Route::get('/student/dashboard', [App\Http\Controllers\Student\DashboardController::class, 'index']);

	Route::get('/student/tagihan', [App\Http\Controllers\Student\InvoiceController::class, 'index']);
});