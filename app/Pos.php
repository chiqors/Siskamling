<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pos extends Model
{
    protected $table = 't_pos';
    public $primaryKey = 'id_pos';
    
    protected $fillable = ['lokasi'];
    
    public $timestamps = false;
}
