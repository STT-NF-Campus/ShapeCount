<?php

namespace App\Http\Controllers\BangunRuang;

// import class ShapesController
use App\Http\Controllers\ShapesController;

// import class Request
use Illuminate\Http\Request;


/**
 *  Class BolaController untuk menghitung luas bola dan mengembalikan view
 * @implements ShapesController
 */
class BolaController implements ShapesController
{

    /**
     * Method untuk Menampilkan view
     * @override method showPage() dari interface ShapesController
     * @return view
     */
    public function showPage()
    {
        return view('BangunRuang.bola');
    }


    /**
     * Method untuk Menghitung luas bola
     * @override method hitungLuas() dari interface ShapesController
     * @param Request $request
     * @return Aray $data hasil perhitungan
     */
    public function hitungLuas(Request $request)
    {
        $jarijari = $request->input('jarijari');

        $luas = 4 * 22/7 * $jarijari * $jarijari;

        $luas = number_format($luas, 0, ',', '.');

        $data = [
            'jarijari' => $jarijari,
            'luas' => $luas,
        ];

        return $data;
    }
}
