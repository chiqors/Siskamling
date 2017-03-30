<?php

use Illuminate\Database\Seeder;

class PenjagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "nama_penjaga" => "",
            "alamat" => ""
        ];
        DB::table('t_penjaga')->insert($data);
    }
}
