<?php

use Illuminate\Support\Facades\Route;

Route::middleware('isParent')->group(function(){
	// Route
	Route::get('/parent/dashboard', function(){
		return 'Selamat Datang Parent| <a href="/logout">LOGOUT</a>';
	});
});