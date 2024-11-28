<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengguna=[
            ['name'=>'Jaka','email'=>'Jaka701@gmail.com','password'=>'jaka123','role'=>'admin'],
            ['name'=>'budi','email'=>'budi021@gmail.com','password'=>'budi123','role'=>'petugas kebun'],
            ['name'=>'Airin','email'=>'ririn664@gmail.com','password'=>'ririn64','role'=>'manajer'],
            ['name'=>'Samuel','email'=>'samWilson798@gmail.com','password'=>'samisami123','role'=>'manajer'],
            ['name'=>'Bagas','email'=>'AhmadMaulana422@gmail.com','password'=>'bagasGacor','role'=>'petugas kebun'],
        ];

        DB::table('pengguna')->insert($pengguna);
    }
}
