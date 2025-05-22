<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{

    public function index()
    {
        $layanan = Layanan::all();

        return view('layanan.index', ['layanan' => $layanan,]);
    }

    public function show($ID){
        $layanan = Layanan::find($ID);
        $layanan_list = Layanan::all();

        return view('layanan.show', ['layanan' => $layanan, 'list' => $layanan_list,]);
    }
}
