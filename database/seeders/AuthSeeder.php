<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthSeeder extends Seeder
{

    public function run(): void
    {
        if (User::whereEmail('admin@admin.com')->count() < 1)
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
        ]);
    }
}
