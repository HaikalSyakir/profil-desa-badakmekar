<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();

        return view('tentang', ['layanan' => $layanan,]);
    }
}
