<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KebunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kebun=[
            ['lokasi'=>'dusun baru','luas'=>'1','status'=>'siap','tanggal_tanam'=>'17-10-2024','tanggal_panen'=>'17-10-2024'],
            ['lokasi'=>'dusun baru','luas'=>'1','status'=>'budi123','tanggal_tanam'=>'17-10-2024','tanggal_panen'=>'17-10-2024'],
            ['lokasi'=>'dusun harapan','luas'=>'2','status'=>'ririn64','tanggal_tanam'=>'17-10-2024','tanggal_panen'=>'17-10-2024'],
            ['lokasi'=>'dusun bersama','luas'=>'1','status'=>'samisami123','tanggal_tanam'=>'17-10-2024','tanggal_panen'=>'17-10-2024'],
            ['lokasi'=>'dusun baru','luas'=>'1','status'=>'bagasGacor','tanggal_tanam'=>'17-10-2024','tanggal_panen'=>'17-10-2024'],
        ];

        DB::table('kebun')->insert($kebun);
        echo json_encode($kebun,'');
    }
}
