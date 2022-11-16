<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\DivisiController;


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
Route::get('/', [PegawaiController::class, 'index'])->name('home');

Route::resource('/pegawai', PegawaiController::class);
Route::resource('/jabatan', JabatanController::class);
Route::resource('/divisi', DivisiController::class);
