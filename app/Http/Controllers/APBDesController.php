<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class APBDesController extends Controller
{
    public function index(){
        $layanan = Layanan::all();

        return view('apbdes', ['list' => $layanan,]);
    }
}
