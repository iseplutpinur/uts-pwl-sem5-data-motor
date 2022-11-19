<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\KecamatanController;


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
Route::get('/', [KelurahanController::class, 'index'])->name('home');

Route::resource('/kelurahan', KelurahanController::class);
Route::resource('/kecamatan', KecamatanController::class);
