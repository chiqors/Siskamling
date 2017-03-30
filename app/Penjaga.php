<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjaga extends Model
{
    protected $table = 't_penjaga';
    public $primaryKey = 'no_penjaga';
    
    protected $fillable = ['avatar','nama_penjaga','alamat'];
    
    public $timestamps = false;
}
