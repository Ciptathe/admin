<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController; //dilaravel terbaru wajib panggil package controller
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

//url beranda memanggil berandacontroler yang ada didalam index
Route::get('/beranda',[BerandaController::class,'index']);
//Route::resource('/siswa', SiswaController::class);