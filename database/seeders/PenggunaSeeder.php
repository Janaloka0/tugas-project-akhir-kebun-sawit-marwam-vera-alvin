<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengguna=[
            ['name'=>'Jaka','email'=>'Jaka701@gmail.com','password'=>hash::make('jaka123'),'role'=>'admin'],
            ['name'=>'budi','email'=>'budi021@gmail.com','password'=>hash::make('budi021'),'role'=>'petugas kebun'],
            ['name'=>'Airin','email'=>'ririn664@gmail.com','password'=>hash::make('ririn64'),'role'=>'manajer'],
            ['name'=>'Samuel','email'=>'samWilson798@gmail.com','password'=>hash::make('samisami123'),'role'=>'manajer'],
            ['name'=>'Bagas','email'=>'AhmadMaulana422@gmail.com','password'=>hash::make('bagasGacor'),'role'=>'petugas kebun'],
        ];

        DB::table('pengguna')->insert($pengguna);
    }
}
