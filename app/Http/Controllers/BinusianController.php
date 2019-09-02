<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BinusianController extends Controller
{
    public function index()
    {
        $nama = "Dimas Prasetyo";
        $pelajaran = ["MTK 1","Bahasa Indonesia","Bahasa Inggris"];

        return view('Binusian',['nama' => $nama, 'matpel' => $pelajaran]);
    }
}
