<?php

namespace App\Http\Controllers\BangunDatar;

// import class ShapesController
use App\Http\Controllers\ShapesController;

// import class Request
use Illuminate\Http\Request;


/**
 * Class LingkaranController untuk menghitung luas lingkaran dan mengembalikan view
 * @implements ShapesController
 */
class LingkaranController implements ShapesController
{
    /**
     * Method untuk Menampilkan view
     * @override method showPage() dari interface ShapesController
     * @return view
     */
    public function showPage(){
        return view('BangunDatar.lingkaran');
    }


    /**
     * Method untuk Menghitung luas lingkaran
     * @override method hitungLuas() dari interface ShapesController
     * @param Request $request
     * @return Array $data value hasil perhitungan
     */
    public function hitungLuas(Request $request){
        $jari = $request->input('jari');
        $fi = 3.14;
        $luas = $fi * $jari * $jari;

        $data = [
            'jari' => $jari,
            'luas' => $luas,
            'fi' => $fi,
        ];

        return $data;
    }
}
