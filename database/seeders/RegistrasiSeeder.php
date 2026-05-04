<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RegistrasiModel; // Pastikan nama model ini benar
use Illuminate\Support\Facades\Hash;

class RegistrasiSeeder extends Seeder
{
    /**
     * Jalankan database seeds.
     */
    public function run(): void
    {
        RegistrasiModel::create([
        'nis'      => '12345',
        'nama'     => 'Budi Santoso',
        'username' => 'Budi Sentosa',
        'kelas'    => 'XII PPLG 1',   
        'password' => Hash::make('password123'),
    ]);

    // Data kedua
    RegistrasiModel::create([
        'nis'      => '12346',
        'nama'     => 'Abhi Mulki A',
        'username' => 'Abhi Developer',
        'kelas'    => 'XII PPLG 1',
        'password' => Hash::make('rahasia123'),
    ]);
    }
}