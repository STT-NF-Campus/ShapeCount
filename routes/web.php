<?php

use App\Http\Controllers\BangunruangController;
use App\Http\Controllers\DatarController;
use App\Http\Controllers\RuangController;
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
    return view('welcome');
});


//Bikin routing untuk Bangun Datar pake controller
Route::get('/ruang', [RuangController::class, 'index']);
