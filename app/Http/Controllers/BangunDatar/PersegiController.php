<?php

namespace App\Http\Controllers\BangunDatar;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DatarController;
use Illuminate\Http\Request;

class PersegiController extends Controller implements DatarController
{

    public function showPage()
    {
        return view('BangunDatar.persegi');
    }

    public function hitungLuas(Request $request)
    {
        
        $this->validate($request, [
            'sisi' => 'required|numeric'
        ]);

        $sisi = $request->input('sisi');
        $luas = $sisi * $sisi;

        $data = [
            'sisi' => $sisi,
            'luas' => $luas,
        ];

        return view('BangunDatar.persegi', $data);
    }
}
