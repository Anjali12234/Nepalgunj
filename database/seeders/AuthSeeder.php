<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AuthSeeder extends Seeder
{
    public function run(): void
    {

        $permissions = [
            'role-create',
            'role-edit',
            'role-delete',
            'role-access',
            'user-create',
            'user-edit',
            'user-delete',
            'user-access',
            'setting-create',
            'setting-edit',
            'setting-delete',
            'setting-access',
            'registered-user-dashboard-access',
            'property-ad-create',
            'property-ad-edit',
            'property-ad-delete',
            'property-ad-access',
            'education-ad-create',
            'education-ad-edit',
            'education-ad-delete',
            'education-ad-access',
            'health-care-ad-create',
            'health-care-ad-edit',
            'health-care-ad-delete',
            'health-care-ad-access',

        ];


        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }


        $user = User::where('email', 'admin@admin.com')->first();

        if (!$user) {

            $superAdminRole = Role::firstOrCreate(['name' => 'superadmin']);


            $user = User::factory()->create([
                'name' => 'Super Admin',
                'email' => 'nepalgunjliving@gmail.com',
                'password' => bcrypt('Living23422@$#@'),
            ]);



            $superAdminRole->syncPermissions($permissions);


            $user->assignRole($superAdminRole);
        } else {

            $superAdminRole = Role::firstOrCreate(['name' => 'superadmin']);
            $superAdminRole->syncPermissions($permissions);
            $user->assignRole($superAdminRole);
        }
        if (Setting::count() === 0) {
            Setting::create([
                'name_ne' => 'Nepalgunj',
                'name_en' => 'Nepalgunj@admin.com',
                'address_ne' => 'Nepalgunj',
                'address_en' => 'Nepalgunj',
                'logo1' => null,
                'instagram_url' => null,
                'facebook_url' => null,
                'twitter_url' => null,
                'youtube_url' => null,
                'map_url' => null,
                'phone_number' => '9874569854',
                'email' => 'nepalgunj@gmail.com',
                'logo2' => null,
            ]);
        }
    }
}
