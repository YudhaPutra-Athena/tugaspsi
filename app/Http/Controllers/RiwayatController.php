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
        $penginapC = DB::table('penginap')
                    ->whereMonth('tanggal', '03')
                    ->get(); 
        $penginapD = DB::table('penginap')
                    ->whereMonth('tanggal', '04')
                    ->get(); 
        $penginapE = DB::table('penginap')
                    ->whereMonth('tanggal', '05')
                    ->get(); 
        $penginapF = DB::table('penginap')
                    ->whereMonth('tanggal', '06')
                    ->get(); 
        $penginapG = DB::table('penginap')
                    ->whereMonth('tanggal', '07')
                    ->get(); 
        return view('riwayatperbulan', compact('penginapA','penginapB', 'penginapC', 'penginapD', 'penginapE', 'penginapF', 'penginapG'));
    }

    public function hitung()
    { 
       $penginapA = DB::table('penginap')
                    ->whereMonth('tanggal', '01')
                    ->count(); 
        $penginapB = DB::table('penginap')
                    ->whereMonth('tanggal', '02')
                    ->count(); 
        $penginapC = DB::table('penginap')
                    ->whereMonth('tanggal', '03')
                    ->count(); 
        $penginapD = DB::table('penginap')
                    ->whereMonth('tanggal', '04')
                    ->count(); 
        $penginapE = DB::table('penginap')
                    ->whereMonth('tanggal', '05')
                    ->count(); 
        $penginapF = DB::table('penginap')
                    ->whereMonth('tanggal', '06')
                    ->count(); 
        $penginapG = DB::table('penginap')
                    ->whereMonth('tanggal', '07')
                    ->count(); 
        return view('riwayatperbulan', compact('penginapA', 'penginapB', 'penginapC', 'penginapD', 'penginapE', 'penginapF', 'penginapG'));
    }

    public function jk()
    { 
        $penginapjk1 = DB::table('penginap')
                    ->where('jk', 'perempuan')
                    ->count(); 
        $penginapjk2 = DB::table('penginap')
                    ->where('jk', 'laki-laki')
                    ->count(); 
    }
}
