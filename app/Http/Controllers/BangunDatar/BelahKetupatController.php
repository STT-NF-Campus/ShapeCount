<?php

namespace App\Http\Controllers\BangunDatar;

// import class ShapesController
use App\Http\Controllers\ShapesController;

// import class Request
use Illuminate\Http\Request;


/**
 *  Class BelahKetupatController berfungsi untuk menghitung luas belah ketupat dan mengembalikan view
 * @implements ShapesController
 */
class BelahKetupatController implements ShapesController
{

    /**
     * Method untuk Menampilkan view
     * @override method showPage() dari interface ShapesController
     * @return view
     */
    public function showPage()
    {
        return view('BangunDatar.belah_ketupat');
    }


    /**
     * Method untuk Menghitung luas belah ketupat
     * @override method hitungLuas di class ShapesController
     * @param Request $request
     * @return Array $data value hasil perhitungan
     */
    public function hitungLuas(Request $request)
    {
        $d1 = $request->input('d1');
        $d2 = $request->input('d2');

        $luas = 0.5 * $d1 * $d2;

        $data = [
            'd1' => $d1,
            'd2' => $d2,
            'luas' => $luas
        ];

        return $data ;
    }
}
