<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{
    public function bulan1()
    {
    	// mengambil data dari table warga
        $penginap = DB::table('penginap')
                    ->whereMonth('tanggal', '1')
                    ->get(); 
    
 
    	// mengirim data warga ke view index
        return view('riwayatperbulan',['penginap' => $penginap]);
    }

    public function bulan2()
    {
    	// mengambil data dari table warga
        $penginap = DB::table('penginap')
                    ->whereMonth('tanggal', '2')
                    ->get(); 
    
 
    	// mengirim data warga ke view index
        return view('riwayatperbulan',['penginap' => $penginap]);
    }
}
