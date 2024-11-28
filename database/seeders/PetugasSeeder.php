<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $petugas = [
            ['pengguna' => 'Jaka', 'nama petugas' => 'Budi', 'jabatan' => 'admin'],
            ['pengguna' => 'Budi', 'nama petugas' => 'Bagas', 'jabatan' => 'petugas kebun'],
            ['pengguna' => 'Airin', 'nama petugas' => 'Budi', 'jabatan' => 'manajer'],
            ['pengguna' => 'Samuel', 'nama petugas' => 'Budi', 'jabatan' => 'manajer'],
            ['pengguna' => 'Bagas', 'nama petugas' => 'Budi', 'jabatan' => 'manajer'],

        ];
        DB::table('pengguna')->insert($petugas);
    }
}
