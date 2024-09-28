<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AuthSeeder extends Seeder
{

    // public function run(): void
    // {
    //     if (User::whereEmail('admin@admin.com')->count() < 1)
    //     User::create([
    //         'name' => 'Super Admin',
    //         'email' => 'admin@admin.com',
    //         'password' => 'password',
    //     ]);
    // }

    public function run(): void
    {
        // Create the Super Admin role using Spatie's Role model
        $superAdminRole = Role::firstOrCreate(['name' => 'superadmin']);

        // Create the Super Admin user
        $user = User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'), // Use bcrypt for hashing the password
        ]);

        // Assign the Super Admin role to the user
        $user->assignRole($superAdminRole);
    }
}
