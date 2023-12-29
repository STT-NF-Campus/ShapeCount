<?php

// Untuk memanggil controllers bangun datar
use App\Http\Controllers\DatarController;
// memanggil controller persegi
use App\Http\Controllers\BangunDatar\PersegiController;
// memanggil controller segitiga
use App\Http\Controllers\BangunDatar\SegitigaController;
// memanggil controller lingkaran
use App\Http\Controllers\BangunDatar\LingkaranController;
// memanggil controller persegi panjang
use App\Http\Controllers\BangunDatar\PersegiPanjangController;
// memanggil controller jajar genjang
use App\Http\Controllers\BangunDatar\JajarGenjangController;
// memanggil controller belah ketupat
use App\Http\Controllers\BangunDatar\BelahKetupatController;


// Untuk memanggil controllers bangun ruang
use App\Http\Controllers\RuangController;
// memanggil controller kubus
use App\Http\Controllers\BangunRuang\KubusController;
// memanggil controller tabung
use App\Http\Controllers\BangunRuang\TabungController;
// memanggil controller balok
use App\Http\Controllers\BangunRuang\BalokController;
// memanggil controller kerucut
use App\Http\Controllers\BangunRuang\KerucutController;
// memanggil controller limas
use App\Http\Controllers\BangunRuang\LimasController;
// memanggil controller bola
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

// Route untuk landing page
Route::get('/', function () {
    return view('home');
});


// Route untuk grup dengan prefix bangun datar
Route::prefix('/bangun_datar')->group(function () {
    Route::get('',function(){
        return view('bangun_datar');
    })->name('bangun-datar');
    // Route persegi
    Route::prefix('/persegi')->group(function () {
        Route::get('', [PersegiController::class, 'showPage'])->name('persegi.showPage');
        Route::post('/hitung', [PersegiController::class, 'hitungLuas'])->name('persegi.hitungLuas');
    });
    // Route Segitiga
    Route::prefix('/segitiga')->group(function () {
        Route::get('', [SegitigaController::class, 'showPage'])->name('segitiga.showPage');
        Route::post('/hitung', [SegitigaController::class, 'hitungLuas'])->name('segitiga.hitungLuas');
    });
    // Route Lingkaran
    Route::prefix('/lingkaran')->group(function () {
        Route::get('', [LingkaranController::class, 'showPage'])->name('lingkaran.showPage');
        Route::post('/hitung', [LingkaranController::class, 'hitungLuas'])->name('lingkaran.hitungLuas');
    });
    // Route Persegi Panjang
    Route::prefix('/persegi_panjang')->group(function () {
        Route::get('', [PersegiPanjangController::class, 'showPage'])->name('persegipanjang.showPage');
        Route::post('/hitung', [PersegiPanjangController::class, 'hitungLuas'])->name('persegipanjang.hitungLuas');
    });
    // Route Jajar genjang
    Route::prefix('/jajar_genjang')->group(function () {
        Route::get('', [JajarGenjangController::class, 'showPage'])->name('jajargenjang.showPage');
        Route::post('/hitung', [JajarGenjangController::class, 'hitungLuas'])->name('jajargenjang.hitungLuas');
    });
    // Route Belah Ketupat
    Route::prefix('/belah_ketupat')->group(function () {
        Route::get('', [BelahKetupatController::class, 'showPage'])->name('belahketupat.showPage');
        Route::post('/hitung', [BelahKetupatController::class, 'hitungLuas'])->name('belahketupat.hitungLuas');
    });
});

//Route untuk grup dengan prefix bangun ruang
Route::prefix('/bangun_ruang')->group(function () {
    Route::get('', function () {
        return view('bangun_ruang');
    })->name('bangun-ruang');
    // Route Kubus
    Route::prefix('/kubus')->group(function () {
        Route::get('', [KubusController::class, 'showPage'])->name('kubus.showPage');
        Route::post('/hitung', [KubusController::class, 'hitungLuas'])->name('kubus.hitungLuas');
    });
    // Route Tabung
    Route::prefix('/tabung')->group(function () {
        Route::get('', [TabungController::class, 'showPage'])->name('tabung.showPage');
        Route::post('/hitung', [TabungController::class, 'hitungLuas'])->name('tabung.hitungLuas');
    });
    // Route Balok
    Route::prefix('/balok')->group(function () {
        Route::get('', [BalokController::class, 'showPage'])->name('balok.showPage');
        Route::post('/hitung', [BalokController::class, 'hitungLuas'])->name('balok.hitungLuas');
    });
    // Route Kerucut
    Route::prefix('/kerucut')->group(function () {
        Route::get('', [KerucutController::class, 'showPage'])->name('kerucut.showPage');
        Route::post('/hitung', [KerucutController::class, 'hitungLuas'])->name('kerucut.hitungLuas');
    });
    // Route Limas
    Route::prefix('/limas')->group(function () {
        Route::get('', [LimasController::class, 'showPage'])->name('limas.showPage');
        Route::post('/hitung', [LimasController::class, 'hitungLuas'])->name('limas.hitungLuas');
    });
    // Route Bola
    Route::prefix('/bola')->group(function () {
        Route::get('', [BolaController::class, 'showPage'])->name('bola.showPage');
        Route::post('/hitung', [BolaController::class, 'hitungLuas'])->name('bola.hitungLuas');
    });
});
