<?php

namespace App\Http\Controllers\BangunDatar;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DatarController;
use Illuminate\Http\Request;

class JajarGenjangController extends Controller implements DatarController
{
    public function showPage()
    {
        return view('BangunDatar.jajar_genjang');
    }

    public function hitungLuas(Request $request)
    {
        $alas = $request->input('alas');
        $tinggi = $request->input('tinggi');

        $luas = $alas * $tinggi;

        $data = [
            'alas' => $alas,
            'tinggi' => $tinggi,
            'luas' => $luas,
        ];

        return view('BangunDatar.jajar_genjang', $data);
    }

}
