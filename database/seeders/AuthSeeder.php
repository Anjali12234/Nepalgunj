<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AuthSeeder extends Seeder
{
    public function run(): void
    {
        // Check if the user already exists
        $user = User::where('email', 'admin@admin.com')->first();

        if (!$user) {
            // Create the Super Admin role using Spatie's Role model
            $superAdminRole = Role::firstOrCreate(['name' => 'superadmin']);

            // Create the Super Admin user
            $user = User::factory()->create([
                'name' => 'Super Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ]);

            // Assign the Super Admin role to the user
            $user->assignRole($superAdminRole);
        } else {
            // Optionally, assign the Super Admin role if the user already exists
            $superAdminRole = Role::firstOrCreate(['name' => 'superadmin']);
            $user->assignRole($superAdminRole);
        }
    }
}
