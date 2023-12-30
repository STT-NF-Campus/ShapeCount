<?php

namespace App\Http\Controllers\BangunRuang;

// import class ShapesController
use App\Http\Controllers\ShapesController;

// import class Request
use Illuminate\Http\Request;


/**
 *  Class LimasController untuk menghitung luas limas dan mengembalikan view
 * @implements ShapesController
 */
class LimasController implements ShapesController
{
    /**
     * Method untuk Menampilkan view
     * @override method showPage() dari interface ShapesController
     * @return view
     */
    public function showPage()
    {
        return view('BangunRuang.limas');
    }

    /**
     * Method untuk Menghitung luas limas
     * @override method hitungLuas() dari interface ShapesController
     * @param Request $request
     * @return Aray $data hasil perhitungan
     */
    public function hitungLuas(Request $request)
    {
        $salas = $request->input('salas');
        $tinggist = $request->input('tinggist');
        $luas = ($salas * $salas) + (4 * (1/2 * $salas * $tinggist));
        $data = [
            'salas' => $salas,
            'tinggist' => $tinggist,
            'luas' => $luas,
        ];
        return $data;
    }
}
