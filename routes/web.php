<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekretarisController;
use App\Http\Controllers\JenisSuratController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('index');
})->name('index')->middleware('auth');
Route::get('login', [AuthController::class, 'login'])->name('login');;
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('jenis-surat', [JenisSuratController::class, 'index'])->middleware('auth');
Route::get('tambah-jenis-surat', [JenisSuratController::class, 'create'])->middleware('auth');
Route::post('tambah-jenis-surat', [JenisSuratController::class, 'store'])->middleware('auth');
Route::get('edit-jenis-surat/{id}', [JenisSuratController::class, 'edit'])->middleware('auth');
Route::patch('update-jenis-surat/{id}', [JenisSuratController::class, 'update'])->middleware('auth');
Route::delete('delete/{id}', [JenisSuratController::class, 'destroy'])->middleware('auth');
