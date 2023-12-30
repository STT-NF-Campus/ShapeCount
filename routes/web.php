<?php

// import class main controller
use App\Http\Controllers\MainController;


// import class penghitung luas bangun datar
use App\Http\Controllers\BangunDatar\PersegiController;
use App\Http\Controllers\BangunDatar\SegitigaController;
use App\Http\Controllers\BangunDatar\LingkaranController;
use App\Http\Controllers\BangunDatar\PersegiPanjangController;
use App\Http\Controllers\BangunDatar\JajarGenjangController;
use App\Http\Controllers\BangunDatar\BelahKetupatController;

// import class penghitung luas bangun ruang
use App\Http\Controllers\BangunRuang\KubusController;
use App\Http\Controllers\BangunRuang\TabungController;
use App\Http\Controllers\BangunRuang\BalokController;
use App\Http\Controllers\BangunRuang\KerucutController;
use App\Http\Controllers\BangunRuang\LimasController;
use App\Http\Controllers\BangunRuang\BolaController;

// import class Route
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

// Route untuk menampilkan halaman home
Route::get('/', function () {
    return view('home');
});


// Route Prefix untuk Group Route yang memiliki prefix bangun_datar
Route::prefix('/bangun_datar')->group(function () {

    // Route untuk menampilkan halaman bangun datar
    Route::get('',function(){
        return view('bangun_datar');
    })->name('bangun-datar');

    // Route Persegi
    Route::prefix('/persegi')->group(function () {
        Route::get('', [PersegiController::class, 'showPage'])->name('persegi.showPage');
        Route::post('/hitung', [MainController::class, 'persegi'])->name('persegi.hitungLuas');
    });

    // Route Segitiga
    Route::prefix('/segitiga')->group(function () {
        Route::get('', [SegitigaController::class, 'showPage'])->name('segitiga.showPage');
        Route::post('/hitung', [MainController::class, 'segitiga'])->name('segitiga.hitungLuas');
    });

    // Route Lingkaran
    Route::prefix('/lingkaran')->group(function () {
        Route::get('', [LingkaranController::class, 'showPage'])->name('lingkaran.showPage');
        Route::post('/hitung', [MainController::class, 'lingkaran'])->name('lingkaran.hitungLuas');
    });

    // Route Persegi Panjang
    Route::prefix('/persegi_panjang')->group(function () {
        Route::get('', [PersegiPanjangController::class, 'showPage'])->name('persegipanjang.showPage');
        Route::post('/hitung', [MainController::class, 'persegiPanjang'])->name('persegipanjang.hitungLuas');
    });

    // Route Jajar Genjang
    Route::prefix('/jajar_genjang')->group(function () {
        Route::get('', [JajarGenjangController::class, 'showPage'])->name('jajargenjang.showPage');
        Route::post('/hitung', [MainController::class, 'jajarGenjang'])->name('jajargenjang.hitungLuas');
    });

    // Route Belah Ketupat
    Route::prefix('/belah_ketupat')->group(function () {
        Route::get('', [BelahKetupatController::class, 'showPage'])->name('belahketupat.showPage');
        Route::post('/hitung', [MainController::class, 'belahKetupat'])->name('belahketupat.hitungLuas');
    });
});


// Route Prefix untuk Group Route yang memiliki prefix bangun_ruang
Route::prefix('/bangun_ruang')->group(function () {

    // Route untuk menampilkan halaman bangun ruang
    Route::get('', function () {
        return view('bangun_ruang');
    })->name('bangun-ruang');

    // Route Kubus
    Route::prefix('/kubus')->group(function () {
        Route::get('', [KubusController::class, 'showPage'])->name('kubus.showPage');
        Route::post('/hitung', [MainController::class, 'kubus'])->name('kubus.hitungLuas');
    });

    // Route Tabung
    Route::prefix('/tabung')->group(function () {
        Route::get('', [TabungController::class, 'showPage'])->name('tabung.showPage');
        Route::post('/hitung', [MainController::class, 'tabung'])->name('tabung.hitungLuas');
    });

    // Route Balok
    Route::prefix('/balok')->group(function () {
        Route::get('', [BalokController::class, 'showPage'])->name('balok.showPage');
        Route::post('/hitung', [MainController::class, 'balok'])->name('balok.hitungLuas');
    });

    // Route Kerucut
    Route::prefix('/kerucut')->group(function () {
        Route::get('', [KerucutController::class, 'showPage'])->name('kerucut.showPage');
        Route::post('/hitung', [MainController::class, 'kerucut'])->name('kerucut.hitungLuas');
    });

    // Route Limas
    Route::prefix('/limas')->group(function () {
        Route::get('', [LimasController::class, 'showPage'])->name('limas.showPage');
        Route::post('/hitung', [MainController::class, 'limas'])->name('limas.hitungLuas');
    });

    // Route Bola
    Route::prefix('/bola')->group(function () {
        Route::get('', [BolaController::class, 'showPage'])->name('bola.showPage');
        Route::post('/hitung', [MainController::class, 'bola'])->name('bola.hitungLuas');
    });
});
