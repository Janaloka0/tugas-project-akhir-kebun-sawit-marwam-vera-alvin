<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistribusiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $distribusi = [
            ['produksi_id' => '1', 'tujuan' => 'kebun', 'jumlah' => '10',],
            ['produksi_id' => '2', 'tujuan' => 'kebun', 'jumlah' => '10',],
            ['produksi_id' => '3', 'tujuan' => 'kebun', 'jumlah' => '10',],
            ['produksi_id' => '4', 'tujuan' => 'kebun', 'jumlah' => '10',],
            ['produksi_id' => '5', 'tujuan' => 'kebun', 'jumlah' => '10',],
        ];

        DB::table('distribusi')->insert($distribusi);
    }
}
