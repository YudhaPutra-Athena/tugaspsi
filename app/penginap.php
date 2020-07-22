<?php

namespace App\penginap;

use Illuminate\Database\Eloquent\Model;

class penginap extends Model
{
   protected $table = 'penginap';

   protected $fillable = ['id','nik','nama','alamat','umur','jk', 'tanggal'];

}
