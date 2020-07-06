<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenginapController extends Controller
{
    public function index()
    {
        // mengambil data dari table warga
        
        $penginap = DB::table('penginap')->get();
        
        //$dataPenginapTiapBulan = array();
        //for($i = 1; $i <= 12; $i++){
        //   $dataPenginapTiapBulan[] = $penginap = DB::table('penginap')
        //     ->whereMonth('tanggal', $i)
        //     ->get();
        // }
 
    	// mengirim data warga ke view index
        return view('index',['penginap' => $penginap]);
    }

    public function tambah()
    {
        //memanggil view tambah
        return view('tambahpenginap');
    }

    public function store(Request $request)
    {
        // insert data ke table penginap
        DB::table('penginap')->insert([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'tanggal' => $request->tanggal,
        ]);
        // alihkan halaman ke halaman penginap
        return redirect('/penginap');
    }

    public function edit($id)
    {
	    // mengambil data warga berdasarkan id yang dipilih
	    $penginap = DB::table('penginap')->where('id',$id)->get();
	    // passing data warga yang didapat ke view edit.blade.php
        return view('editpenginap',['penginap' => $penginap]);
    }

    public function update(Request $request)
    {
	    // update data penginap
	    DB::table('penginap')->where('id',$request->id)->update([
	    	'nama' => $request->nama,
            'umur' => $request->umur,
            'tanggal' => $request->tanggal,
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/penginap');
    }

    public function hapus($id)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('penginap')->where('id',$id)->delete();
		
	    // alihkan halaman ke halaman pegawai
	    return redirect('/penginap');
    }

}
