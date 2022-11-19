<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\MerekController;


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
// rute default pegawai
Route::get('/', [MotorController::class, 'index'])->name('home');

Route::resource('/motor', MotorController::class);
Route::resource('/merek', MerekController::class);
