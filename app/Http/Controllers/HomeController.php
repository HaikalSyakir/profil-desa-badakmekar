<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Wisata;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        $wisata = Wisata::all();

        return view('home', ['layanan' => $layanan, 'wisata' => $wisata,]);
    }
}
