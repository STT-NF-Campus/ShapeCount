<?php

namespace App\Http\Controllers\BangunRuang;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RuangController;
use Illuminate\Http\Request;

class BolaController extends Controller implements RuangController
{
    public function showPage()
    {
        return view('BangunRuang.bola');
    }

    public function hitungLuas(Request $request)
    {
        $jarijari = $request->input('jarijari');

        $luas = 4 * 22/7 * $jarijari * $jarijari;

        $luas = number_format($luas, 0, ',', '.');

        $data = [
            'jarijari' => $jarijari,
            'luas' => $luas,
        ];

        return view('BangunRuang.bola', $data);
    }
}
