<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cobaController;
use App\Http\Controllers\NormController;
use App\Http\Controllers\BobotController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DistanceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NormbobotController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\SolusinegatifController;
use App\Http\Controllers\SolusipositifController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');

Route::get('/forgot-password', [LoginController::class, 'forgot_password'])->name('forgot-password');
Route::post('/forgot-password-act', [LoginController::class, 'forgot_password_act'])->name('forgot-password-act');

Route::get('/validasi-forgot-password/{token}', [LoginController::class, 'validasi_forgot_password'])->name('validasi-forgot-password');
Route::post('/validasi-forgot-password-act', [LoginController::class, 'validasi_forgot_password_act'])->name('validasi-forgot-password-act');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'register_proses'])->name('register-proses');
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

Route::get('/settings',[LoginController::class, 'setting']) -> name('settings');
Route::post('/settings/password', [LoginController::class, 'updatePassword'])->name('updatePassword');

Route::get('/auth/redirect',[SocialiteController::class, 'redirect']);

Route::get('/auth/google/callback',[SocialiteController::class, 'callback']);

Route::resource('/dashboard', DashboardController::class);

Route::resource('/alternatif', cobaController::class);

Route::resource('/hasil', HasilController::class);

Route::resource('/bobot', BobotController::class);

Route::resource('/norm', NormController::class);

Route::resource('/normbobot', NormbobotController::class);

Route::resource('/solusipositif', SolusipositifController::class);

Route::resource('/solusinegatif', SolusinegatifController::class);

Route::resource('/distance', DistanceController::class);
