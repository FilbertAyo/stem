<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Seed the application's roles and default users.
     */
    public function run(): void
    {
        $roles = [
            'admin',
            'teacher',
            'student',
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role]);
        }

        $admin = User::factory()->create([
            'name' => 'Platform Administrator',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
        $admin->assignRole('admin');

        $teacher = User::factory()->create([
            'name' => 'Sample Teacher',
            'email' => 'teacher@example.com',
            'password' => Hash::make('password'),
        ]);
        $teacher->assignRole('teacher');

        $student = User::factory()->create([
            'name' => 'Sample Student',
            'email' => 'student@example.com',
            'password' => Hash::make('password'),
        ]);
        $student->assignRole('student');
    }
}

