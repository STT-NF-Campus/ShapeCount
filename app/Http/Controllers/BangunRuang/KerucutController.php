<?php

namespace App\Http\Controllers\BangunRuang;

// import class ShapesController
use App\Http\Controllers\ShapesController;

// import class Request
use Illuminate\Http\Request;


/**
 *  Class KerucutController untuk menghitung luas kerucut dan mengembalikan view
 * @implements ShapesController
 */
class KerucutController implements ShapesController
{
    /**
     * Method untuk Menampilkan view
     * @override method showPage() dari interface ShapesController
     * @return view
     */
    public function showPage()
    {
        return view('BangunRuang.kerucut');
    }


    /**
     * Method untuk Menghitung luas kerucut
     * @override method hitungLuas() dari interface ShapesController
     * @param Request $request
     * @return Aray $data hasil perhitungan
     */
    public function hitungLuas(Request $request){
        $jari = $request->input('jarijari');
        $sisi = $request->input('sisi');

        $luas = 3.14 * $jari * ($jari + $sisi);

        $data = [
            'jari' => $jari,
            'sisi' => $sisi,
            'luas' => $luas,
        ];

        return $data;
    }
}
