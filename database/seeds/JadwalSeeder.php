<?php

use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "mulai" => "",
            "selesai" => "",
            "tanggal" => "",
            "id_pos" => "",
            "id_tugas" => "",
            "no_penjaga" => ""
        ];
        DB::table('t_jadwal')->insert($data);
    }
}