<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','isParent'])->group(function(){
	// Route
	Route::get('/parent/dashboard', [App\Http\Controllers\Parent\DashboardController::class, 'index']);
	Route::get('/parent/edit-profile', [
		App\Http\Controllers\Access\EditProfileController::class, 'index'
	]);
	Route::get('/parent/change-password', [
		App\Http\Controllers\Access\ChangePasswordController::class, 'index'
	]);
	Route::get('/parent/pembayaran', [App\Http\Controllers\Parent\PaymentController::class, 'index']);
	Route::get('/parent/tagihan', [App\Http\Controllers\Parent\InvoiceController::class, 'index']);
});