<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','isAdmin'])->group(function(){
	// Route
	Route::get('/admin/dashboard', [
		App\Http\Controllers\Admin\DashboardController::class, 'index'
	]);
	Route::get('/admin/account/list', [
		App\Http\Controllers\Admin\AccountController::class, 'index'
	]);
	Route::get('/admin/edit-profile', [
		App\Http\Controllers\Access\EditProfileController::class, 'index'
	]);
	Route::post('/admin/edit-profile', [
		App\Http\Controllers\Access\EditProfileController::class, 'update'
	]);
	Route::get('/admin/change-password', [
		App\Http\Controllers\Access\ChangePasswordController::class, 'index'
	]);

	// Payment
	Route::get('/admin/pembayaran', [
		App\Http\Controllers\Admin\PaymentController::class, 'index'
	]);

	// Invoice
	Route::get('/admin/tagihan', [
		App\Http\Controllers\Admin\InvoiceController::class, 'index'
	]);

	// Feedback
	Route::get('/admin/feedback', [
		App\Http\Controllers\Admin\FeedbackController::class, 'index'
	]);
	
	// History
	Route::get('/admin/history', [
		App\Http\Controllers\Admin\HistoryController::class, 'index'
	]);


	// Account
	Route::get('/admin/linked-account', [
		App\Http\Controllers\Admin\LinkedAccountController::class, 'index'
	]);
	Route::get('/admin/account', [
		App\Http\Controllers\Admin\NewAccountController::class, 'index'
	]);
	Route::get('/admin/account/remove', [
		App\Http\Controllers\Admin\RemoveAccountController::class, 'index'
	]);
});