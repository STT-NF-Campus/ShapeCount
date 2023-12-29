<?php

namespace App\Http\Controllers\BangunDatar;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DatarController;
use Illuminate\Http\Request;

class BelahKetupatController extends Controller implements DatarController
{
    public function showPage()
    {
        return view('BangunDatar.belah_ketupat');
    }

    public function hitungLuas(Request $request)
    {
        $ci = $request->input('d_ci');
        $di = $request->input('d_di');

        $d1 = 2 * $ci;
        $d2 = 2 * $di;

        $luas = 0.5 * $d1 * $d2;

        $data = [
            'ci' => $ci,
            'di' => $di,
            'd1' => $d1,
            'd2' => $d2,
            'luas' => $luas
        ];

        return view('BangunDatar.belah_ketupat', $data);
    }
}
