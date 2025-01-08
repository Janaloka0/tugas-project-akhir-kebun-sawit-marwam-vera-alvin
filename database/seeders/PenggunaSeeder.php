<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        pengguna::create([
            'name' => 'marwan',
            'email' => 'teratech001@example.com',
            'password' => Hash::make('teratech001'),  // Gunakan Hash untuk menyimpan password
            'role' => 'admin',
        ]);

        Pengguna::create([
            'name' => 'alvin',
            'email' => 'alvin@example.com',
            'password' => Hash::make('alvin1234'),
            'role' => 'manajer',
        ]);

        Pengguna::create([
            'name' => 'vera',
            'email' => 'vera@example.com',
            'password' => Hash::make('vera1234'),
            'role' => 'petugas_kebun',
        ]);
    }
}
