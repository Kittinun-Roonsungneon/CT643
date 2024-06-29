<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QRLoginController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// routes/api.php

Route::get('/generate-qr', [QRLoginController::class, 'showGenerateQRForm'])->name('generate-qr');
Route::post('/generate-qr', [QRLoginController::class, 'generateQRCode'])->name('generate-qr.post');

Route::post('/generate-qr', [QRLoginController::class, 'generateQRCode']);
Route::post('/request-jwt', [QRLoginController::class, 'requestJWT']);
Route::middleware('auth:sanctum')->post('/verify-qr', [QRLoginController::class, 'verifyQRCode']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
