<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RolePermissionSeeder extends Seeder
{
    /**
     * Seed the application's roles and default users.
     */
    public function run(): void
    {
        $admin = User::factory()->create([
            'name' => 'Platform Administrator',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        $teacher = User::factory()->create([
            'name' => 'Sample Teacher',
            'email' => 'teacher@example.com',
            'password' => Hash::make('password'),
            'role' => 'teacher',
        ]);

        $student = User::factory()->create([
            'name' => 'Sample Student',
            'email' => 'student@example.com',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);
    }
}

