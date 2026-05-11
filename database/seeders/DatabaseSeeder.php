<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Administrator',
            'username' => 'admin',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Budi Santoso',
            'username' => 'siswa',
            'password' => bcrypt('password'),
            'role' => 'siswa',
            'nis' => '12345',
            'kelas' => 'XII PPLG 1',
        ]);

        User::factory()->create([
            'name' => 'Raiky Adila Fitriadi',
            'username' => 'raiky',
            'password' => bcrypt('raiky123'),
            'role' => 'siswa',
            'nis' => '12346',
            'kelas' => 'XII PPLG 1',
        ]);
    }
}
