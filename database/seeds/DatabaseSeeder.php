<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        $data = [
            "nama_kelas" => "XII-RPL 3",
            "jurusan" => "Rekayasa Perangkat Lunak"
        ];
        DB::table('t_kelas')->insert($data);
    }
}
