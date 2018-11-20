<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gejala extends Model
{
    protected $table='gejala';
    // public $timestamps = false;
    // public $primaryKey ='id';

    protected $fillable = [
        'pertanyaan', 'ya', 'tidak', 'posisi'
    ];
    
    public function ya(){
        return $this->hasOne('App\gejala');
    }
    
    public function tidak(){
        return $this->hasOne('App\gejala');
    }
    
    public function penyakit(){
        return $this->belongsTo('App\penyakit','id_penyakit');
    }

    public function gejala()
    {
        return $this->belongsTo('App\gejala');
    }

}
