<?php

namespace App\Http\Controllers\BangunDatar;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DatarController;
use Illuminate\Http\Request;

class LingkaranController extends Controller implements DatarController
{
    public function showPage(){
        return view('BangunDatar.lingkaran');
    }

    public function hitungLuas(Request $request){
        $jari = $request->input('jari');
        $fi = 3.14;
        $luas = $fi * $jari * $jari;

        $data = [
            'jari' => $jari,
            'luas' => $luas,
            'fi' => $fi,
        ];

        return view('BangunDatar.lingkaran', $data);
    }
}
