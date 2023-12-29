<?php

namespace App\Http\Controllers\BangunRuang;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RuangController;
use Illuminate\Http\Request;

class LimasController extends Controller implements RuangController
{
    public function showPage()
    {
        return view('BangunRuang.limas');
    }

    public function hitungLuas(Request $request)
    {
        $salas = $request->input('salas');
        $tinggist = $request->input('tinggist');
        $luas = ($salas * $salas) + (4 * (1/2 * $salas * $tinggist));
        $data = [
            'salas' => $salas,
            'tinggist' => $tinggist,
            'luas' => $luas,
        ];
        return view('BangunRuang.limas', $data );
    }
}
