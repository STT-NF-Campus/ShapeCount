<?php

namespace App\Http\Controllers\BangunRuang;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RuangController;
use Illuminate\Http\Request;

class KerucutController extends Controller implements RuangController
{
    public function showPage()
    {
        return view('BangunRuang.kerucut');
    }

    public function hitungLuas(Request $request){
        $jari = $request->input('jarijari');
        $sisi = $request->input('sisi');

        $luas = 3.14 * $jari * ($jari + $sisi);

        $data = [
            'jari' => $jari,
            'sisi' => $sisi,
            'luas' => $luas,
        ];

        return view('BangunRuang.kerucut',$data);
    }
}
