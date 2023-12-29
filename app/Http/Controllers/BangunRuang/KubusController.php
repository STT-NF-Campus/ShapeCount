<?php

namespace App\Http\Controllers\BangunRuang;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RuangController;
use Illuminate\Http\Request;


class KubusController extends Controller implements RuangController
{
    public function showPage()
    {
        return view('BangunRuang.kubus');
    }

    public function hitungLuas(Request $request)
    {
        $sisi = $request->input('sisi');
        $luas = 6 * pow($sisi, 2);

        $data = [
            'sisi' => $sisi,
            'luas' => $luas,
        ];
        return view('BangunRuang.kubus', $data);
    }
}
