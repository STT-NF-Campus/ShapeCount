<?php

namespace App\Http\Controllers\BangunDatar;

// import class ShapesController
use App\Http\Controllers\ShapesController;

// import class Request
use Illuminate\Http\Request;


/**
 *  Class PersegiPanjangController untuk menghitung luas persegi panjang dan mengembalikan view
 * @implements ShapesController
 */
class PersegiPanjangController implements ShapesController
{

    /**
     * Method untuk Menampilkan view
     * @override method showPage() dari interface ShapesController
     * @return view
     */
    public function showPage(){
        return view('BangunDatar.persegi_panjang');
    }


    /**
     * Method untuk Menghitung luas persegi panjang
     * @override method hitungLuas() dari interface ShapesController
     * @param Request $request
     * @return Array $data value hasil perhitungan
     */
    public function hitungLuas(Request $request){
        $panjang = $request->input('panjang');
        $lebar = $request->input('lebar');

        $luas = $panjang * $lebar;

        $data = [
            'panjang' => $panjang,
            'lebar' => $lebar,
            'luas' => $luas,
        ];

        return $data;
    }
}
