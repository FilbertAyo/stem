<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed a default administrator account
        User::factory()
            ->admin()
            ->create([
                'name' => 'Platform Administrator',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
            ]);

        // Seed a default student account
        User::factory()->create([
            'name' => 'Sample Student',
            'email' => 'student@example.com',
        ]);

        // Seed a default teacher account
        User::factory()->create([
            'name' => 'Sample Teacher',
            'email' => 'teacher@example.com',
            'role' => 'teacher',
        ]);
    }
}
