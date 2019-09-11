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

    public function tambah()
    {
        return view('tambah');
    }

    // insert data ke db controller menggunakana query builder 
    // public function store(Request $request)
    // {
    //     DB::table('pegawai')->insert([
    //         'pegawai_nama' => $request->nama,
    //         'pegawai_jabatan' => $request->jabatan,
    //         'pegawai_umur' => $request->umur,
    //         'pegawai_Email' => $request->email
    //     ]);

    //     return redirect('/pegawai');
    // }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('pegawai')->insert([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_Email' => $request->Email
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
 
    }

    public function edit($id)
    {
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();

        return view('edit',['pegawai' => $pegawai]);
    }

    public function update(Request $request)
    {
        DB::table('pegawai')->where('pegawai_id',$request->id)->update([
        'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_Email' => $request->Email
        ]);

        return redirect('/pegawai');
    }

    public function delete($id)
    {
        DB::table('pegawai')->where('pegawai_id',$id)->delete();

        return redirect('/pegawai');
    }
}
