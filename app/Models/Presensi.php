<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
	use HasFactory;
	protected $fillable = [ 
		'id_user',
		'image_masuk',
		'jam_masuk',
		'latitude',
		'longitude',
		'tanggal',
		'id_karyawan'
	];
	public function preskaryawan(){ 
        #return $this->hasMany('App\Models\Karyawan');
        return $this->belongsTo('App\Models\Karyawan','id_karyawan'); 
    } 
}
