<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 't_jadwal';
    public $primaryKey = 'id_jadwal';
    
    protected $fillable = ['mulai','selesai','tanggal','id_pos','id_tugas','no_penjaga'];
    
    public $timestamps = false;
}
