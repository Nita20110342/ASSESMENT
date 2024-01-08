<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('mahasiswa', App\Http\Controllers\MahasiswaController::class);
Route::resource('dosen', App\Http\Controllers\DosenController::class);
Route::resource('matakuliah', App\Http\Controllers\MataKuliahController::class);
Route::resource('program_studi', App\Http\Controllers\ProgramStudiController::class);