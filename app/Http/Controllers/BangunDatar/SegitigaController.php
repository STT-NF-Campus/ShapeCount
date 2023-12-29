<?php

namespace App\Http\Controllers\BangunDatar;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DatarController;
use Illuminate\Http\Request;

class SegitigaController extends Controller implements DatarController
{
    public function showPage(){
        return view('BangunDatar.segitiga');
    }

    public function hitungLuas(Request $request){
        
        $this->validate($request, [
            'alas' => 'required|numeric',
            'tinggi' => 'required|numeric'
        ]);

        $alas = $request->input('alas');
        $tinggi = $request->input('tinggi');

        $luas = 0.5 * $alas * $tinggi;

        $data = [
            'alas' => $alas,
            'tinggi' => $tinggi,
            'luas' => $luas,
        ];

        return view('BangunDatar.segitiga', $data);
    }
}
