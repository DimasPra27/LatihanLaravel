<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//query builder laravel
use Illuminate\support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        //menagmbil dara dari table pegawai
        $pegawai = DB::table('pegawai')->get();

        // mengirim data pegawai ke view
        return view('index',['pegawai' => $pegawai]);
    }
}
