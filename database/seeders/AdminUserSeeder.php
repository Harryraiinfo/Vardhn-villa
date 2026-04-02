<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::create([
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('admin123'),
        'role' => 'super_admin',
    ]);

    User::create([
        'name' => 'Manager',
        'email' => 'manager@gmail.com',
        'password' => Hash::make('manager123'),
        'role' => 'manager',
    ]);
    }
}
