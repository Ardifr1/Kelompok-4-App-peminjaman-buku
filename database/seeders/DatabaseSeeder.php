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
            'username' => 'admin1',
            'password' => bcrypt('Admin123'),
            'role' => 'admin',
            'status' => 'approved',
        ]);

        User::factory()->create([
            'name' => 'Administrator',
            'username' => 'admin2',
            'password' => bcrypt('Admin123'),
            'role' => 'admin',
            'status' => 'approved',
        ]);

        User::factory()->create([
            'name' => 'Administrator',
            'username' => 'admin3',
            'password' => bcrypt('Admin123'),
            'role' => 'admin',
            'status' => 'approved',
        ]);
    }
}
