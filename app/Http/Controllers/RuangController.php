<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface RuangController
{
    public function showPage();

    public function hitungLuas(Request $request);
}

// class Balok extends RuangController
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         return view('form_balok');
//     }

//     public function store(Request $request)
//     {
//         $data = $request->validate([
//             'panjang' => 'required|numeric',
//             'lebar' => 'required|numeric',
//             'tinggi' => 'required|numeric'
//         ]);

//         $data['luas'] = 2 * ($data['panjang'] * $data['lebar'] + $data['panjang'] * $data['tinggi'] + $data['lebar'] * $data['tinggi']);
//         $data['volume'] = $data['panjang'] * $data['lebar'] * $data['tinggi'];

//         return view('form_balok', compact('data'));
//     }
// }
