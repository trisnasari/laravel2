<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KegiatanController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::get('/home',[HomeController::class,'indek'])->name('home')->middleware(['auth:sanctum','verified']);

Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard')->middleware(['auth:sanctum','verified']);
// Route::get('dasboard', 'App\Http\Controllers\DesaController@index')->name('dasboard')->middleware(['auth:sanctum', 'verified']);

Route::resource('pegawai', PegawaiController::class);
Route::resource('keluarga',KeluargaController::class);
Route::resource('kegiatan',KegiatanController::class);
