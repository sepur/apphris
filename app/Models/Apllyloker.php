<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apllyloker extends Model
{
    use HasFactory;
    protected $fillable = [
    'tanggal',
    'loker_id',
    'pelamar_id',
    'progres',
    'status',
    'user_id',
    ];  
    
	public function loker(){ 
      return $this->belongsTo('App\Models\Loker'); 
	}    
	public function pelamar(){ 
      return $this->belongsTo('App\Models\Pelamar'); 
	}
      #public function fk_user(){ 
      #return $this->belongsTo('App\Models\User'); 
      #}
	
}
