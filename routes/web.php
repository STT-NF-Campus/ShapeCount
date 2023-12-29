<?php

use App\Http\Controllers\DatarController;
use App\Http\Controllers\BangunDatar\PersegiController;
use App\Http\Controllers\BangunDatar\SegitigaController;
use App\Http\Controllers\BangunDatar\LingkaranController;
use App\Http\Controllers\BangunDatar\PersegiPanjangController;
use App\Http\Controllers\BangunDatar\JajarGenjangController;
use App\Http\Controllers\BangunDatar\BelahKetupatController;


use App\Http\Controllers\RuangController;
use App\Http\Controllers\BangunRuang\KubusController;
use App\Http\Controllers\BangunRuang\TabungController;
use App\Http\Controllers\BangunRuang\BalokController;
use App\Http\Controllers\BangunRuang\KerucutController;
use App\Http\Controllers\BangunRuang\LimasController;
use App\Http\Controllers\BangunRuang\BolaController;



use Illuminate\Support\Facades\Route;

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
    return view('home');
});



Route::prefix('/bangun_datar')->group(function () {
    Route::get('',function(){
        return view('bangun_datar');
    })->name('bangun-datar');

    Route::prefix('/persegi')->group(function () {
        Route::get('', [PersegiController::class, 'showPage'])->name('persegi.showPage');
        Route::post('/hitung', [PersegiController::class, 'hitungLuas'])->name('persegi.hitungLuas');
    });

    Route::prefix('/segitiga')->group(function () {
        Route::get('', [SegitigaController::class, 'showPage'])->name('segitiga.showPage');
        Route::post('/hitung', [SegitigaController::class, 'hitungLuas'])->name('segitiga.hitungLuas');
    });

    Route::prefix('/lingkaran')->group(function () {
        Route::get('', [LingkaranController::class, 'showPage'])->name('lingkaran.showPage');
        Route::post('/hitung', [LingkaranController::class, 'hitungLuas'])->name('lingkaran.hitungLuas');
    });

    Route::prefix('/persegi_panjang')->group(function () {
        Route::get('', [PersegiPanjangController::class, 'showPage'])->name('persegipanjang.showPage');
        Route::post('/hitung', [PersegiPanjangController::class, 'hitungLuas'])->name('persegipanjang.hitungLuas');
    });

    Route::prefix('/jajar_genjang')->group(function () {
        Route::get('', [JajarGenjangController::class, 'showPage'])->name('jajargenjang.showPage');
        Route::post('/hitung', [JajarGenjangController::class, 'hitungLuas'])->name('jajargenjang.hitungLuas');
    });

    Route::prefix('/belah_ketupat')->group(function () {
        Route::get('', [BelahKetupatController::class, 'showPage'])->name('belahketupat.showPage');
        Route::post('/hitung', [BelahKetupatController::class, 'hitungLuas'])->name('belahketupat.hitungLuas');
    });
});

Route::prefix('/bangun_ruang')->group(function () {
    Route::get('', function () {
        return view('bangun_ruang');
    })->name('bangun-ruang');

    Route::prefix('/kubus')->group(function () {
        Route::get('', [KubusController::class, 'showPage'])->name('kubus.showPage');
        Route::post('/hitung', [KubusController::class, 'hitungLuas'])->name('kubus.hitungLuas');
    });

    Route::prefix('/tabung')->group(function () {
        Route::get('', [TabungController::class, 'showPage'])->name('tabung.showPage');
        Route::post('/hitung', [TabungController::class, 'hitungLuas'])->name('tabung.hitungLuas');
    });

    Route::prefix('/balok')->group(function () {
        Route::get('', [BalokController::class, 'showPage'])->name('balok.showPage');
        Route::post('/hitung', [BalokController::class, 'hitungLuas'])->name('balok.hitungLuas');
    });

    Route::prefix('/kerucut')->group(function () {
        Route::get('', [KerucutController::class, 'showPage'])->name('kerucut.showPage');
        Route::post('/hitung', [KerucutController::class, 'hitungLuas'])->name('kerucut.hitungLuas');
    });

    Route::prefix('/limas')->group(function () {
        Route::get('', [LimasController::class, 'showPage'])->name('limas.showPage');
        Route::post('/hitung', [LimasController::class, 'hitungLuas'])->name('limas.hitungLuas');
    });

    Route::prefix('/bola')->group(function () {
        Route::get('', [BolaController::class, 'showPage'])->name('bola.showPage');
        Route::post('/hitung', [BolaController::class, 'hitungLuas'])->name('bola.hitungLuas');
    });
});
