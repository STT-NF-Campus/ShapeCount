<?php

namespace App\Http\Controllers\BangunRuang;

// import class ShapesController
use App\Http\Controllers\ShapesController;

// import class Request
use Illuminate\Http\Request;

/**
 *  Class KubusController untuk menghitung luas kubus dan mengembalikan view
 * @implements ShapesController
 */
class KubusController implements ShapesController
{
    /**
     * Method untuk Menampilkan view
     * @override method showPage() dari interface ShapesController
     * @return view
     */
    public function showPage()
    {
        return view('BangunRuang.kubus');
    }

    /**
     * Method untuk Menghitung luas kubus
     * @override method hitungLuas() dari interface ShapesController
     * @param Request $request
     * @return Aray $data hasil perhitungan
     */
    public function hitungLuas(Request $request)
    {
        $sisi = $request->input('sisi');
        $luas = 6 * pow($sisi, 2);

        $data = [
            'sisi' => $sisi,
            'luas' => $luas,
        ];
        return $data;
    }
}
