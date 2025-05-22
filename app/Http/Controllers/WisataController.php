<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        $wisata = Wisata::all();

        return view('wisata.index', ['wisata' => $wisata, 'list' => $layanan,]);
    }

    public function show($ID)
    {
        $list = Wisata::find($ID);
        $layanan = Layanan::all();

        return view('wisata.show', ['list' => $list, 'layanan' => $layanan,]);
    }
}
