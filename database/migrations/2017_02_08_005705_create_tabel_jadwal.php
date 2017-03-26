<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelJadwal extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_jadwal', function(Blueprint $table) {
            $table->increments('id_jadwal');
            $table->string('mulai', 100);
            $table->string('selesai', 100);
            $table->string('tanggal', 100);
            $table->integer('id_pos');
            $table->integer('id_tugas');
            $table->integer('no_penjaga');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_jadwal');
    }
}
