<?php

namespace App\Http\Controllers\BangunRuang;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RuangController;
use Illuminate\Http\Request;

class TabungController extends Controller implements RuangController
{
    public function showPage()
    {
        return view('BangunRuang.tabung');
    }

    public function hitungLuas(Request $request)
    {
        $jari = $request->input('jari');
        $tinggi = $request->input('tinggi');
        $luas = 2 * 22/7 * $jari * ($jari + $tinggi);
        $luas = number_format($luas, 0, ',', '.');
        $data = [
            'jari' => $jari,
            'tinggi' => $tinggi,
            'luas' => $luas,
        ];
        return view('BangunRuang.tabung', $data);
    }
}
