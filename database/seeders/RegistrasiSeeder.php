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
            'username' => 'budi.admin',
            'kelas'    => 'XII PPLG 1',
            'role'     => 'Admin',
            'password' => Hash::make('password123'),
        ]);

        RegistrasiModel::create([
            'nis'      => '12346',
            'nama'     => 'Abhi Mulki A',
            'username' => 'abhi.siswa',
            'kelas'    => 'XII PPLG 1',
            'role'     => 'Siswa',
            'password' => Hash::make('rahasia123'),
        ]);

    }
}