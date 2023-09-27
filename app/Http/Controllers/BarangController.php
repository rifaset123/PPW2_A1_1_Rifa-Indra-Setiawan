<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function index()
    {
        $barangs = Barang::all()->sortBy('id_barang');
        return view('barang.index', compact('barangs'));
    }
}
