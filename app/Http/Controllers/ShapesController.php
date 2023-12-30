<?php

namespace App\Http\Controllers;

// import class Request
use Illuminate\Http\Request;

/**
 * Interface ShapesController untuk membuat method yang harus diimplementasikan oleh class lain
 * yaitu class yang menghitung luas bangun datar dan mengembalikan view
 */
interface ShapesController
{
    /**
     * Method untuk Menampilkan view
     * @return view
     */
    public function showPage();

    /**
     * Method untuk Menghitung luas bangun datar
     * @param Request $request
     * @return value hasil perhitungan
     */
    public function hitungLuas(Request $request);
}
