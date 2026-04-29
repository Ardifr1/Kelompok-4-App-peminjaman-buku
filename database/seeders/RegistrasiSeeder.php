<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RegistrasiModel;

class RegistrasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RegistrasiModel::create([
            'NIS' => '12345',
            'Nama' => 'Budi Santoso',
            'Kelas' => 'XII PPLG 1',
        ]);
    }
}
