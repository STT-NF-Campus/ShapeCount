<?php

namespace App\Http\Controllers\BangunRuang;

// import class ShapesController
use App\Http\Controllers\ShapesController;

// import class Request
use Illuminate\Http\Request;


/**
 *  Class BalokController untuk menghitung luas balok dan mengembalikan view
 * @implements ShapesController
 */
class BalokController implements ShapesController
{

    /**
     * Method untuk Menampilkan view
     * @override method showPage() dari interface ShapesController
     * @return view
     */
    public function showPage()
    {
        return view('BangunRuang.balok');
    }


    /**
     * Method untuk Menghitung luas balok
     * @override method hitungLuas() dari interface ShapesController
     * @param Request $request
     * @return Aray $data hasil perhitungan
     */
    public function hitungLuas(Request $request){
        $panjang = $request->input('panjang');
        $lebar = $request->input('lebar');
        $tinggi = $request->input('tinggi');

        $luas = 2 * (($panjang * $lebar) + ($panjang * $tinggi) + ($lebar * $tinggi));

        $data = [
            'panjang' => $panjang,
            'lebar' => $lebar,
            'tinggi' => $tinggi,
            'luas' => $luas,
        ];

        return $data;
    }
}
