<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LineMessageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login-with-qrcode', [AuthController::class, 'loginWithQRCode'])->name('login-with-qrcode');
Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/index', [AuthController::class, 'index']); // เส้นทางหน้า index

Route::post('/send-line-notify', [LineMessageController::class, 'sendLineMessage'])->name('send-line-notify');

