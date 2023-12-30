<?php

namespace App\Http\Controllers\BangunDatar;

// import class ShapesController
use App\Http\Controllers\ShapesController;

// import class Request
use Illuminate\Http\Request;


/**
 *  Class SegitigaController untuk menghitung luas segitiga dan mengembalikan view
 * @implements ShapesController
 */
class SegitigaController implements ShapesController
{

    /**
     * Method untuk Menampilkan view
     * @override method showPage() dari interface ShapesController
     * @return view
     */
    public function showPage(){
        return view('BangunDatar.segitiga');
    }


    /**
     * Method untuk Menghitung luas segitiga
     * @override method hitungLuas() dari interface ShapesController
     * @param Request $request
     * @return Array $data value hasil perhitungan
     */
    public function hitungLuas(Request $request){

        $alas = $request->input('alas');
        $tinggi = $request->input('tinggi');

        $luas = 0.5 * $alas * $tinggi;

        $data = [
            'alas' => $alas,
            'tinggi' => $tinggi,
            'luas' => $luas,
        ];

        return $data;
    }
}
