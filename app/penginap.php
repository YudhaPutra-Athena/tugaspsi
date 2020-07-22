<?php

namespace App\penginap;

use Illuminate\Database\Eloquent\Model;

class penginap extends Model
{
   protected $table = 'penginap';

<<<<<<< HEAD
   // $count1 = App\penginap::where('month', 01)->count();
   //$count1 = App\penginap::where('month', 01)
            //->count();
        
=======
   protected $fillable = ['id','nik','nama','alamat','umur','jk', 'tanggal'];
>>>>>>> 088e7a1d4c3a4119e73176b27447041c8964f1e7

}
