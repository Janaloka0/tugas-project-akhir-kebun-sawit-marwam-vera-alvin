<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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
            ['pengguna_id'=>'1' ,'nama_petugas' => 'Jaka', 'jabatan' => 'admin', 'tanggal_bergabung' => '2020-01-07'],
            ['pengguna_id'=>'1' ,'nama_petugas' => 'Budi', 'jabatan' => 'petugas kebun' , 'tanggal_bergabung' => '2020-01-07'],
            ['pengguna_id'=>'1' ,'nama_petugas' => 'Airin', 'jabatan' => 'manajer' , 'tanggal_bergabung' => '2020-01-07'],
            ['pengguna_id'=>'1' ,'nama_petugas' => 'Samuel', 'jabatan' => 'manajer' , 'tanggal_bergabung' => '2020-01-07'],
            ['pengguna_id'=>'1' ,'nama_petugas' => 'Bagas', 'jabatan' => 'petugas kebun' , 'tanggal_bergabung' => '2020-01-07'],

        ];
        DB::table('petugas')->insert($petugas);
    }
}
