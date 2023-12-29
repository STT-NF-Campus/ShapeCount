<?php

namespace App\Http\Controllers\BangunRuang;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RuangController;
use Illuminate\Http\Request;

class BalokController extends Controller implements RuangController
{
    public function showPage()
    {
        return view('BangunRuang.balok');
    }

    public function hitungLuas(Request $request){
        $panjang = $request->input('panjang');
        $lebar = $request->input('lebar');
        $tinggi = $request->input('tinggi');

        $luas = 2 * (($panjang * $lebar) + ($panjang * $tinggi) + ($lebar * $tinggi));

        $data = [
            'panjang' => $panjang,
            'lebar' => $lebar,
            'tinggi' => $tinggi,
            'luas' => $luas,
        ];

        return view('BangunRuang.balok', $data);
    }
}
