<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $table = 't_tugas';
    public $primaryKey = 'id_tugas';
    
    protected $fillable = ['nama_tugas'];
    
    public $timestamps = false;
}
