<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkolaPayController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SkolaPayController::class, 'index']);
Route::get('/tentang', [SkolaPayController::class, 'about']);
Route::get('/hubungi', [SkolaPayController::class, 'contact']);
Route::get('/pembayaran', [SkolaPayController::class, 'payment']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/is-admin.php';
require __DIR__.'/is-student.php';
require __DIR__.'/is-parent.php';
