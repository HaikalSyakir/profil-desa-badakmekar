<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfilLayananController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\APBDesController;
use App\Http\Controllers\TentangController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/apbdes', [APBDesController::class, 'index'])->name('apbdes');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');

Route::resource('/layanan', LayananController::class);
Route::resource('/wisata', WisataController::class);
