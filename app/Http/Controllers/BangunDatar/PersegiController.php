<?php

namespace App\Http\Controllers\BangunDatar;

// import class ShapesController
use App\Http\Controllers\ShapesController;

// import class Request
use Illuminate\Http\Request;


/**
 * Class PersegiController berfungsi untuk menghitung luas persegi dan mengembalikan view
 * @implements ShapesController
 */
class PersegiController implements ShapesController
{

    /**
     * Method untuk Menampilkan view
     * @override method showPage() dari interface ShapesController
     * @return view
     */
    public function showPage()
    {
        return view('BangunDatar.persegi');
    }


    /**
     * Method untuk Menghitung luas persegi
     * @override method hitungLuas() dari interface ShapesController
     * @param Request $request
     * @return Array $data value hasil perhitungan
     */
    public function hitungLuas(Request $request)
    {

        $request->validate([
            'sisi' => 'required|numeric',
        ]);

        $sisi = $request->input('sisi');
        $luas = $sisi * $sisi;

        $data = [
            'sisi' => $sisi,
            'luas' => $luas,
        ];

        return $data;
    }
}
