<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface DatarController
{
    public function showPage();

    public function hitungLuas(Request $request);
}
