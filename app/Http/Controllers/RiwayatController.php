<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{
    public function bulan()
    {
        $penginapA = DB::table('penginap')
                    ->whereMonth('tanggal', '01')
                    ->get(); 
        $penginapB = DB::table('penginap')
                    ->whereMonth('tanggal', '02')
                    ->get(); 
        return view('riwayatperbulan', compact('penginapA','penginapB'));
    }
}
