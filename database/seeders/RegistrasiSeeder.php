<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistrasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Registrasi::create([
            'NIS' => '12345',
            'Nama' => 'Budi Santoso',
            'Kelas' => 'XII PPLG 1',
        ]);
    }
}
