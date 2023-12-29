<?php

namespace App\Http\Controllers\BangunDatar;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DatarController;
use Illuminate\Http\Request;

class PersegiPanjangController extends Controller implements DatarController
{
    public function showPage(){
        return view('BangunDatar.persegi_panjang');
    }

    public function hitungLuas(Request $request){
        $panjang = $request->input('panjang');
        $lebar = $request->input('lebar');

        $luas = $panjang * $lebar;

        $data = [
            'panjang' => $panjang,
            'lebar' => $lebar,
            'luas' => $luas,
        ];

        return view('BangunDatar.persegi_panjang', $data);
    }
}
