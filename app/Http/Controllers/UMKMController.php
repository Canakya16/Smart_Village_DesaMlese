<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UMKMController extends Controller
{
    public function bagyoLurik()
    {
        return view('umkm.bagyolurik');
    }
}