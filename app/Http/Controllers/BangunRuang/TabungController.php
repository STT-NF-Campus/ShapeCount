<?php

namespace App\Http\Controllers\BangunRuang;

// import class ShapesController
use App\Http\Controllers\ShapesController;

// import class Request
use Illuminate\Http\Request;


/**
 *  Class TabungController untuk menghitung luas tabung dan mengembalikan view
 * @implements ShapesController
 */
class TabungController implements ShapesController
{
    /**
     * Method untuk Menampilkan view
     * @override method showPage() dari interface ShapesController
     * @return view
     */
    public function showPage()
    {
        return view('BangunRuang.tabung');
    }

    /**
     * Method untuk Menghitung luas tabung
     * @override method hitungLuas() dari interface ShapesController
     * @param Request $request
     * @return Aray $data hasil perhitungan
     */
    public function hitungLuas(Request $request)
    {
        $jari = $request->input('jari');
        $tinggi = $request->input('tinggi');
        $luas = 2 * 22/7 * $jari * ($jari + $tinggi);
        $luas = number_format($luas, 0, ',', '.');
        $data = [
            'jari' => $jari,
            'tinggi' => $tinggi,
            'luas' => $luas,
        ];
        return $data;
    }
}
