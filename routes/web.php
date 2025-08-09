<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekretarisController;

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
});

Route::get('Duit', [SekretarisController::class, 'index']);
Route::get('surat-keputusan', [SekretarisController::class, 'suratSk']);
Route::get('surat-tugas', [SekretarisController::class, 'suratTugas']);
Route::get('surat-pemberitahuan', [SekretarisController::class, 'suratPemberitahuan']);
Route::get('surat-undangan', [SekretarisController::class, 'suratUndangan']);
