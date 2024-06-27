<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cobaController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\BobotController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/alternatif', cobaController::class);
Route::resource('hasil', HasilController::class);
Route::resource('bobot', BobotController::class);
