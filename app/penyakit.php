<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penyakit extends Model
{
    //Table Name
    protected $table = 'penyakit';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
