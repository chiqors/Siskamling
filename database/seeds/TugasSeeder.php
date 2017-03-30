<?php

use Illuminate\Database\Seeder;

class TugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "nama_tugas" => ""
        ];
        DB::table('t_tugas')->insert($data);
    }
}
